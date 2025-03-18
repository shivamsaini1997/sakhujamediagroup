<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Catalogue;
use App\Models\CategoryBlog;
use App\Models\DigitalAssetsFacebook;
use App\Models\DigitalAssetsYoutube;
use App\Models\EmployeeOfThemMonth;
use App\Models\GlobalSetting;
use App\Models\Home;
use App\Models\InnovativeProductions;
use App\Models\Job;
use App\Models\JobData;
use App\Models\PerformerOfTheMonth;
use App\Models\ProductionsStudio;
use App\Models\Team;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\DB;
use App\Mail\JobApplicationMail;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use function Laravel\Prompts\alert;
use function PHPUnit\Framework\returnSelf;

class AdminController extends Controller
{
    public function login(){
        return view('backend.login');
    }

    public function loginAdmin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // $credentials = $request->only('email', 'password');
        $credentials = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if (Auth::attempt($credentials)) {
                return redirect()->intended('/admin/dashboard')->with('success', 'You have successfully logged in.');
        }
        return redirect("/admin")->with('error', 'Oops! You have entered invalid credentials.');

    }

    public function registerUser(Request $request){
        $users = User::all();
        $data = compact('users');
        return view('backend.register', ['users' => $users]); // Pass users to the view
    }

    public function stoteRegisterUser(Request $request)  {
        $request->validate([
            'full_name' => 'required|string|max:250',
            'email' => 'required|string|email:rfc,dns|max:250|unique:users,email',
            'password' => 'required|min:8',
            'password-confir' => 'required|same:password',
            'type' => 'required',
        ]);

        // Creating a new user
        $user = User::create([
            'name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), // Encrypt the password
            'type' => $request->input('type') // Save the 'type' field
        ]);

        return redirect()->route('store-register')->with('success', 'You have successfully registered & logged in!');
    }

    public function deleteRegister($id){
        $user = User::find($id);
        if($user->id == 1){
            return redirect()->back()->with('error' ,  'Cannot delete category as it is associated with existing blogs.');
        }
        $user->delete();
        return redirect()->back();
    }

    public function forgetPassword(){
        return view('auth.forgetPassword');
    }

    public function forgetPasswordSubmit(Request $request){
        $request->validate([
            'email' => 'email|required|exists:users',
        ]);

        $token = Str::random(64);
        $url=route('reset.password.get',encrypt($request->email));
        // dd($url);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('auth.reset_password_email', ['url' => $url], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('success', 'We have e-mailed your password reset link!');

    }
     /**
       * Write code on Method
       *
       * @return response()
       */
    public function showResetPasswordForm($email) {
        // dd(decrypt($email));
        $data['email']=decrypt($email);
        return view('auth.forgetPasswordLink',$data);
    }
     /**
       * Write code on Method
       *
       * @return response()
       */
    public function submitResetPasswordForm(Request $request){
          $request->validate([
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
          ]);

          $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);


          return redirect('/admin')->with('success', 'Your password has been changed!');
    }
    
    
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin')->with('success', 'You have successfully logged out.');
    }
    

    public function dashboard(){

        return view('backend.Dashboard.dashboard');
    }


    public function homePage(Request $request) {
        $data_id = $request->data_id;

        if ($request->isMethod('GET')) {
            // Fetch the first record from the homepage table
            $homepage = Home::first();
            $data = compact('homepage');
            return view("backend.home.home")->with($data);
        } else {
            // Fetch the record by ID or create a new instance
            $homepage = $data_id ? Home::find($data_id) : new Home();

            // Dynamic validation rules: video and image required only if not already in the database
            $rules = [
                'whowedescription' => 'required|string',
                'achievementsdescription' => 'required|string',
            ];

            // Only require video if it's not already set in the database
            if (!$homepage->bannervideo) {
                $rules['bannervideo'] = 'required|file|mimetypes:video/*'; // Allow all video types
            }

            // Only require the "Who We Are" image if it's not already set in the database
            if (!$homepage->whoweimage) {
                $rules['whoweimage'] = 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048';
            }

            // Only require the achievements image if it's not already set in the database
            if (!$homepage->achievementsimage) {
                $rules['achievementsimage'] = 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048';
            }

            // Validation rules
            $request->validate($rules, [
                'bannervideo.mimetypes' => 'The banner video must be a valid video file.',
                'whoweimage.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif, svg.',
                'achievementsimage.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif, svg.'
            ]);

            // Handle file upload for banner video
            if ($request->hasFile('bannervideo')) {
                $file = $request->file('bannervideo');
                $filename = time() . '_bannervideo.' . $file->getClientOriginalExtension();
                $file->move(public_path('upload/video'), $filename);
                $homepage->bannervideo = 'upload/video/' . $filename;
            }

            // Handle file upload for "Who We Are" image
            if ($request->hasFile('whoweimage')) {
                $file = $request->file('whoweimage');
                $filename = time() . '_whoweimage.' . $file->getClientOriginalExtension();
                $file->move(public_path('upload'), $filename);
                $homepage->whoweimage = 'upload/' . $filename;
            }

            // Handle file upload for achievements image
            if ($request->hasFile('achievementsimage')) {
                $file = $request->file('achievementsimage');
                $filename = time() . '_achievementsimage.' . $file->getClientOriginalExtension();
                $file->move(public_path('upload'), $filename);
                $homepage->achievementsimage = 'upload/' . $filename;
            }

            // Assign the text fields
            $homepage->whowedescription = $request->input('whowedescription');
            $homepage->achievementsdescription = $request->input('achievementsdescription');

            // Save the homepage data and redirect with success message
            if ($homepage->save()) {
                $message = $data_id ? 'Homepage updated successfully.' : 'Homepage added successfully.';
                return redirect()->back()->with('success', $message);
            }
        }
    }


    public function addBlogCategory(){
        $categoryblog = CategoryBlog::all();
        $data = compact('categoryblog');
        return view('backend.Blog.add-category')->with($data);
    }
    public function storeBlogCategory(Request $request){
        $request->validate([
            'category' => 'required',
        ]);
        $categoryblog = new CategoryBlog;
        $categoryblog->category_name = $request['category'];
        $categoryblog->save();
        return redirect()->back();
    }
    public function deleteCategory($id){
        $category = CategoryBlog::find($id);
            if(!is_null($category)){
                $blogs = Blog::where('category_id', $id)->count();
                if ($blogs > 0) {
                    return redirect()->back()->with('error', 'Cannot delete category as it is associated with existing blogs.');
                }
                $category->delete();
            }
            return redirect()->back();
    }
    public function addBlog(){
        $categoryblog = CategoryBlog::all();
        $url = ('/admin/add-blog');
        $title = "Add Blog";
        $data = compact('categoryblog', 'url' , 'title');
        return view('backend.Blog.add-blog')->with($data);
    }
    public function storeBlog(Request $request){
        $request->validate([
            'category' => 'required',
            'blog_image' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string',
            'slug' => 'required',
            'blog_detail' => 'required'
        ],[
            'blog_image.mimes' => 'image must be a file of type: jpeg, png, jpg, gif, svg.'
        ]);
        $blog = new Blog();
        $blog->category_id = $request->input('category'); // Corrected to use ->input()
        if ($request->hasFile('blog_image')) {
            $blog->blog_image = $request->file('blog_image')->store('public/upload/blog');
        }
        $blog->title = $request->input('title'); // Corrected to use ->input()
        $blog->slug = $request->input('slug'); // Corrected to use ->input()
        $blog->blog_detail = $request->input('blog_detail'); // Corrected to use ->input()
        $blog->save();

        return redirect('/admin/manage-blog')->with('success', 'Blog added successfully');
    }
    public function manageblog(){
        $blogcategory = CategoryBlog::all();
        $blog = Blog::all();
        $data = compact('blog', 'blogcategory');
        // dd($data);
        return view('backend.Blog.manage-blog')->with($data);
    }
    public function editBlog($id) {
        $blog = Blog::find($id);
        if (is_null($blog)) {
            return redirect()->route('manage-blog')->with('error', 'Blog not found.');
        } else {
            $categoryblog = CategoryBlog::all();
            $title = 'Edit Blog';
            $url = route('update-blog', ['id' => $id]);
            $data = compact('blog', 'title', 'url', 'categoryblog');
            return view('backend.Blog.add-blog')->with($data);
        }
    }
    public function updateBlog(Request $request , $id){
        $blog = Blog::find($id);
        $blog->category_id = $request->input('category');
        if ($request->hasFile('blog_image')) {
            $blog->blog_image = $request->file('blog_image')->store('public/upload/blog');
        }
        $blog->title = $request->input('title');
        $blog->slug = $request->input('slug');
        $blog->blog_detail = $request->input('blog_detail');
        $blog->save();

        return redirect('/admin/manage-blog')->with('success', 'Blog added successfully');
    }
    public function statusBlog($id, $status){
        $blog = Blog::find($id);
        $blog->status = $status;
        $blog->save();
        return redirect()->back();
    }
    public function deleteBlog($id){
        $blog = Blog::find($id);
        if(!is_null($blog)){
            $blog->delete();
        }
        return redirect()->back()->with('success', 'Blog delete successfully');
    }


    public function addAssetsYoutube(){
        $url = url('/admin/add-digital-assets-youtube');
        $title = "Add Youtube Digital Assist";
        $data = compact('url','title');
        return view('backend.DigitalAssetsYoutube.add-digital-assets')->with($data);
    }
    public function storeAssetsYoutube(Request $request) {
        // Validate the request
        $request->validate([
            'channel_logo' => 'required|file|mimes:jpeg,jpg|max:150',
            'channel_title' => 'required|string|max:255',
            'channel_url' => 'required|url',
            'channel_username' => 'required|string|max:255',
            'channel_subscription' => 'required|string',
            'channel_total_video' => 'required|string',
            'channel_discription' => 'required|string',
            'serial_thumbnail1' => 'required|file|mimes:jpeg,jpg|max:150',
            'serial_url1' => 'required|url',
            'serial_thumbnail2' => 'required|file|mimes:jpeg,jpg|max:150',
            'serial_url2' => 'required|url',
            'serial_thumbnail3' => 'required|file|mimes:jpeg,jpg|max:150',
            'serial_url3' => 'required|url',
            'serial_thumbnail4' => 'required|file|mimes:jpeg,jpg|max:150',
            'serial_url4' => 'required|url',
        ], [
            'channel_logo.mimes' => 'The channel logo must be a JPEG or JPG file.',
            'channel_logo.max' => 'The channel logo must not exceed 150KB.',
            'serial_thumbnail1.mimes' => 'Thumbnail 1 must be a JPEG or JPG file.',
            'serial_thumbnail1.max' => 'Thumbnail 1 must not exceed 150KB.',
            'serial_thumbnail2.mimes' => 'Thumbnail 2 must be a JPEG or JPG file.',
            'serial_thumbnail2.max' => 'Thumbnail 2 must not exceed 150KB.',
            'serial_thumbnail3.mimes' => 'Thumbnail 3 must be a JPEG or JPG file.',
            'serial_thumbnail3.max' => 'Thumbnail 3 must not exceed 150KB.',
            'serial_thumbnail4.mimes' => 'Thumbnail 4 must be a JPEG or JPG file.',
            'serial_thumbnail4.max' => 'Thumbnail 4 must not exceed 150KB.',
            'channel_url.url' => 'The Channel URL must be a valid URL.',
            'serial_url1.url' => 'The Serial URL 1 must be a valid URL.',
            'serial_url2.url' => 'The Serial URL 2 must be a valid URL.',
            'serial_url3.url' => 'The Serial URL 3 must be a valid URL.',
            'serial_url4.url' => 'The Serial URL 4 must be a valid URL.',
        ]);

        $assetsyoutube = new DigitalAssetsYoutube();

        // Save channel logo
        if ($request->hasFile('channel_logo')) {
            $file = $request->file('channel_logo');
            $filename = time() . '_channel_logo.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $assetsyoutube->channel_logo = 'upload/' . $filename;
        }
        // Save other fields
        $assetsyoutube->channel_title = $request->input('channel_title');
        $assetsyoutube->channel_url = $request->input('channel_url');
        $assetsyoutube->channel_username = $request->input('channel_username');
        $assetsyoutube->channel_subscribers = $request->input('channel_subscription');
        $assetsyoutube->channel_total_video = $request->input('channel_total_video');
        $assetsyoutube->channel_discreption = $request->input('channel_discription');

        // Save serial thumbnails and URLs
        if ($request->hasFile('serial_thumbnail1')) {
            $file = $request->file('serial_thumbnail1');
            $filename = time() . '_serial_thumbnail1.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $assetsyoutube->serial_thumbnail1 = 'upload/' . $filename;
        }
        $assetsyoutube->serial_url1 = $request->input('serial_url1');
        if ($request->hasFile('serial_thumbnail2')) {
            $file = $request->file('serial_thumbnail2');
            $filename = time() . '_serial_thumbnail2.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $assetsyoutube->serial_thumbnail2 = 'upload/' . $filename;
        }
        $assetsyoutube->serial_url2 = $request->input('serial_url2');
        if ($request->hasFile('serial_thumbnail3')) {
            $file = $request->file('serial_thumbnail3');
            $filename = time() . '_serial_thumbnail3.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $assetsyoutube->serial_thumbnail3 = 'upload/' . $filename;
        }
        $assetsyoutube->serial_url3 = $request->input('serial_url3');
        if ($request->hasFile('serial_thumbnail4')) {
            $file = $request->file('serial_thumbnail4');
            $filename = time() . '_serial_thumbnail4.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $assetsyoutube->serial_thumbnail4 = 'upload/' . $filename;
        }
        $assetsyoutube->serial_url4 = $request->input('serial_url4');
        // dd($assetsyoutube->save());
        $assetsyoutube->save();
        return redirect('/admin/manage-digital-assets-youtube')->with('success', 'YouTube Digital Assets added successfully');
    }
    public function manageDigitalAssetsYoutube(){
        $youtubedigitalassets = DigitalAssetsYoutube::orderBy('created_at', 'desc')->paginate(4);
        $data = compact('youtubedigitalassets');
        // dd($data);
        return view('backend.DigitalAssetsYoutube.manage-digital-assets')->with($data);
    }
    public function editYoutubeDigital($id){
        $youtubedigitalassets =  DigitalAssetsYoutube::find($id);
        $url = url('/admin/manage-digital-assets-youtube/update/') . "/" . $id;
        $title = "Edit Youtube Digital Assist";
        $data = compact('youtubedigitalassets','url','title');
        // dd($data);
        return view('backend.DigitalAssetsYoutube.add-digital-assets')->with($data);
    }
    public function updateYoutubeDigital(Request $request, $id) {
        // Find the existing YouTube digital asset record
        $youtubedigitalassets = DigitalAssetsYoutube::find($id);

        // Validate the request
        $request->validate([
            'channel_logo' => $youtubedigitalassets->channel_logo ? 'nullable|file|mimes:jpeg,jpg,svg|max:150' : 'required|file|mimes:jpeg,jpg,svg|max:150',
            'channel_title' => 'required|string',
            'channel_url' => 'required|url',
            'channel_username' => 'required|string',
            'channel_subscription' => 'required',
            'channel_total_video' => 'required',
            'channel_discription' => 'required|string',
            'serial_thumbnail1' => $youtubedigitalassets->serial_thumbnail1 ? 'nullable|file|mimes:jpeg,jpg|max:150': 'required|file|mimes:jpeg,jpg|max:150',
            'serial_url1' => 'required|url',
            'serial_thumbnail2' => $youtubedigitalassets->serial_thumbnail2 ? 'nullable|file|mimes:jpeg,jpg|max:150': 'required|file|mimes:jpeg,jpg|max:150',
            'serial_url2' => 'required|url',
            'serial_thumbnail3' => $youtubedigitalassets->serial_thumbnail3 ? 'nullable|file|mimes:jpeg,jpg|max:150': 'required|file|mimes:jpeg,jpg|max:150',
            'serial_url3' => 'required|url',
            'serial_thumbnail4' => $youtubedigitalassets->serial_thumbnail4 ? 'nullable|file|mimes:jpeg,jpg|max:150': 'required|file|mimes:jpeg,jpg|max:150',
            'serial_url4' => 'required|url',
        ], [
            'channel_logo.mimes' => 'The channel logo must be a file of type: jpeg, jpg, svg.',
            'serial_thumbnail1.mimes' => 'Thumbnail 1 must be a file of type: jpeg, jpg.',
            'serial_thumbnail2.mimes' => 'Thumbnail 2 must be a file of type: jpeg, jpg.',
            'serial_thumbnail3.mimes' => 'Thumbnail 3 must be a file of type: jpeg, jpg.',
            'serial_thumbnail4.mimes' => 'Thumbnail 4 must be a file of type: jpeg, jpg.',
            'channel_url.url' => 'Channel URL must be a valid URL.',
            'serial_url1.url' => 'Serial URL 1 must be a valid URL.',
            'serial_url2.url' => 'Serial URL 2 must be a valid URL.',
            'serial_url3.url' => 'Serial URL 3 must be a valid URL.',
            'serial_url4.url' => 'Serial URL 4 must be a valid URL.',
            'channel_logo.max' => 'The channel logo field must not be greater than 150kb.',
            'serial_thumbnail1.max' => 'The serial_thumbnail1 field must not be greater than 150kb.',
            'serial_thumbnail2.max' => 'The serial_thumbnail2 field must not be greater than 150kb.',
            'serial_thumbnail3.max' => 'The serial_thumbnail3 field must not be greater than 150kb.',
            'serial_thumbnail4.max' => 'The serial_thumbnail4 field must not be greater than 150kb.',

        ]);

        // Delete old channel logo if a new one is uploaded
        if ($request->hasFile('channel_logo')) {
            if ($youtubedigitalassets->channel_logo && file_exists(public_path($youtubedigitalassets->channel_logo))) {
                unlink(public_path($youtubedigitalassets->channel_logo));
            }

            $file = $request->file('channel_logo');
            $filename = time() . '_channel_logo.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $youtubedigitalassets->channel_logo = 'upload/' . $filename;
        }

        // Update other fields
        $youtubedigitalassets->channel_title = $request->input('channel_title');
        $youtubedigitalassets->channel_url = $request->input('channel_url');
        $youtubedigitalassets->channel_username = $request->input('channel_username');
        $youtubedigitalassets->channel_subscribers = $request->input('channel_subscription');
        $youtubedigitalassets->channel_total_video = $request->input('channel_total_video');
        $youtubedigitalassets->channel_discreption = $request->input('channel_discription');

        // Delete old serial thumbnail 1 if a new one is uploaded
        if ($request->hasFile('serial_thumbnail1')) {
            if ($youtubedigitalassets->serial_thumbnail1 && file_exists(public_path($youtubedigitalassets->serial_thumbnail1))) {
                unlink(public_path($youtubedigitalassets->serial_thumbnail1));
            }

            $file = $request->file('serial_thumbnail1');
            $filename = time() . '_serial_thumbnail1.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $youtubedigitalassets->serial_thumbnail1 = 'upload/' . $filename;
        }
        $youtubedigitalassets->serial_url1 = $request->input('serial_url1');

        // Delete old serial thumbnail 2 if a new one is uploaded
        if ($request->hasFile('serial_thumbnail2')) {
            if ($youtubedigitalassets->serial_thumbnail2 && file_exists(public_path($youtubedigitalassets->serial_thumbnail2))) {
                unlink(public_path($youtubedigitalassets->serial_thumbnail2));
            }

            $file = $request->file('serial_thumbnail2');
            $filename = time() . '_serial_thumbnail2.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $youtubedigitalassets->serial_thumbnail2 = 'upload/' . $filename;
        }
        $youtubedigitalassets->serial_url2 = $request->input('serial_url2');

        // Delete old serial thumbnail 3 if a new one is uploaded
        if ($request->hasFile('serial_thumbnail3')) {
            if ($youtubedigitalassets->serial_thumbnail3 && file_exists(public_path($youtubedigitalassets->serial_thumbnail3))) {
                unlink(public_path($youtubedigitalassets->serial_thumbnail3));
            }

            $file = $request->file('serial_thumbnail3');
            $filename = time() . '_serial_thumbnail3.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $youtubedigitalassets->serial_thumbnail3 = 'upload/' . $filename;
        }
        $youtubedigitalassets->serial_url3 = $request->input('serial_url3');

        // Delete old serial thumbnail 4 if a new one is uploaded
        if ($request->hasFile('serial_thumbnail4')) {
            if ($youtubedigitalassets->serial_thumbnail4 && file_exists(public_path($youtubedigitalassets->serial_thumbnail4))) {
                unlink(public_path($youtubedigitalassets->serial_thumbnail4));
            }

            $file = $request->file('serial_thumbnail4');
            $filename = time() . '_serial_thumbnail4.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $youtubedigitalassets->serial_thumbnail4 = 'upload/' . $filename;
        }
        $youtubedigitalassets->serial_url4 = $request->input('serial_url4');

        // Save the updated record
        $youtubedigitalassets->save();

        // Redirect back with success message
        return redirect('/admin/manage-digital-assets-youtube')->with('success', 'YouTube Digital Assets updated successfully');
    }
    public function deleteYoutubeDigital($id){
        $youtubedigitalassets = DigitalAssetsYoutube::find($id);
        if(!is_null($youtubedigitalassets)){
            $youtubedigitalassets->delete();
        }
        return redirect()->back()->with('success', 'YouTube Digital Assets deleted successfully');
    }
    public function statusYoutubeDigital($id, $status){
        $youtubedigitalassets = DigitalAssetsYoutube::find($id);
        $youtubedigitalassets->status = $status;
        $youtubedigitalassets->save();
        return back();
    }


    public function addAssetsFacebook(){
        $title = 'Add Facebook Digital Assets';
        $url = url('/admin/add-digital-assets-facebook');
        $data = compact('title', 'url');
        return view('backend.DigitalAssetsFacebook.add-digital-assets-facbook')->with($data);
    }
    public function storeAssetsFacebook(Request $request){
        $request->validate([
            'channel_logo' => 'required|file|mimes:jpeg,jpg,svg|max:150',
            'channel_title' => 'required|string',
            'channel_url' => 'required|url',
        ],[
            'channel_logo.mimes' => 'The channel logo must be a file of type: jpeg, jpg, svg.',
            'channel_logo.max' => 'The channel logo field must not be greater than 150kb.',
        ]);
        $facebookassets = new DigitalAssetsFacebook();
        // Save channel logo
        if($request->hasFile('channel_logo')) {
            $file = $request->file('channel_logo');
            $filename = time() . '_channel_logo.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $facebookassets->channel_logo = 'upload/' . $filename;
        }
        $facebookassets->channel_title = $request->input('channel_title');
        $facebookassets->channel_url = $request->input('channel_url');
        $facebookassets->save();
        return redirect('/admin/manage-digital-assets-facebook')->with('success', 'Facebook Digital Assets added successfully');
    }
    public function manageAssetsFacebook(){
        $facebookassets = DigitalAssetsFacebook::orderBy('created_at', 'desc')->paginate(6);
        $data = compact('facebookassets');
        // dd($data);
        return view ('backend.DigitalAssetsFacebook.manage-digital-assets-facebook')->with($data);
    }
    public function updateFacebookDigital(Request $request, $id) {
        $facebookassets = DigitalAssetsFacebook::find($id);

        // Validate the request
        $request->validate([
            'channel_logo' => $facebookassets->channel_logo ? 'nullable|file|mimes:jpeg,jpg,svg|max:150' : 'required|file|mimes:jpeg,jpg,svg|max:150',
            'channel_title' => 'required|string',
            'channel_url' => 'required|url',
        ], [
            'channel_logo.mimes' => 'The channel logo must be a file of type: jpeg, jpg, svg.',
            'channel_logo.max' => 'The channel logo field must not be greater than 150kb.',
        ]);

        // Check if a new channel logo is being uploaded
        if ($request->hasFile('channel_logo')) {
            // Delete the old logo if it exists
            if ($facebookassets->channel_logo && file_exists(public_path($facebookassets->channel_logo))) {
                unlink(public_path($facebookassets->channel_logo));
            }

            // Save the new logo
            $file = $request->file('channel_logo');
            $filename = time() . '_channel_logo.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $facebookassets->channel_logo = 'upload/' . $filename;
        }

        // Update the rest of the fields
        $facebookassets->channel_title = $request->input('channel_title');
        $facebookassets->channel_url = $request->input('channel_url');

        // Save the updated data
        $facebookassets->save();

        return redirect('/admin/manage-digital-assets-facebook')->with('success', 'Facebook Digital Assets updated successfully');
    }
    public function editAssetsFacebook($id){
        $facebookassets = DigitalAssetsFacebook::find($id);
        $title = 'Edit Facebook Digital Assets';
        $url = url('admin/manage-digital-assets-facebook/update') . "/" . $id;
        $data = compact('title', 'url','facebookassets');
        return view('backend.DigitalAssetsFacebook.add-digital-assets-facbook')->with($data);

    }
    public function deleteFackbookDigital($id){
        $facebookassets = DigitalAssetsFacebook::find($id);
        if(!is_null($facebookassets)){
            $facebookassets->delete();
        }
        return redirect()->back()->with('success', 'Facebook Digital Assets deleted successfully');
    }
    public function statusFacebookDigital($id, $status){
        $facebookassets = DigitalAssetsFacebook::find($id);
        $facebookassets->status = $status;
        $facebookassets->save();
        return back();
    }



    public function global(Request $request){
        $data_id = $request->data_id;
        if ($request->isMethod('GET')) {
            $global = GlobalSetting::first();
            $data = compact('global');
            // dd($data);
            return view('backend.global.global')->with($data);
        } else {
            // Validation rules
            $request->validate([
                'header_logo' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'favicon' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'footer_logo' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'instagram_link' => 'required|url',
                'facebook_link' => 'required|url',
                'linkedin_link' => 'required|url',
                'twitter_link' => 'required|url',
                'phone' => 'required|numeric|digits:10',
                'email' => 'required|email',
                'office_address' => 'required|string|max:255'
            ], [
                'phone.digits' => 'The phone number must be exactly 10 digits.',
                'email.email' => 'Please provide a valid email address.',
                'header_logo.mimes' => 'Header logo must be a file of type: jpeg, png, jpg, gif, svg.',
                'favicon.mimes' => 'Favicon must be a file of type: jpeg, png, jpg, gif, svg.',
                'footer_logo.mimes' => 'Footer logo must be a file of type: jpeg, png, jpg, gif, svg.'
            ]);

            // Fetch existing global settings or create a new instance
            $global = $data_id ? GlobalSetting::find($data_id) : new GlobalSetting();

              // Handle file uploads
            if ($request->hasFile('header_logo')) {
                $file = $request->file('header_logo');
                $filename = time() . '_header.' . $file->getClientOriginalExtension();
                $file->move(public_path('upload'), $filename);
                $global->headerlogo = 'upload/' . $filename;
            }

            if ($request->hasFile('favicon')) {
                $file = $request->file('favicon');
                $filename = time() . '_favicon.' . $file->getClientOriginalExtension();
                $file->move(public_path('upload'), $filename);
                $global->favicon = 'upload/' . $filename;
            }

            if ($request->hasFile('footer_logo')) {
                $file = $request->file('footer_logo');
                $filename = time() . '_footer.' . $file->getClientOriginalExtension();
                $file->move(public_path('upload'), $filename);
                $global->footerlogo = 'upload/' . $filename;
            }

            // Assign other fields
            $global->instagramlink = $request->input('instagram_link');
            $global->facebooklink = $request->input('facebook_link');
            $global->linkedinlink = $request->input('linkedin_link');
            $global->twitter_link = $request->input('twitter_link');
            $global->phone = $request->input('phone');
            $global->email = $request->input('email');
            $global->address_office = $request->input('office_address');

            // Save the global settings
            if($global->save()){

                return redirect()->back()->with('success', 'Global settings updated successfully.');
            }

        }
    }
    public function deleteHeaderLogo($id) {
        $globalSetting = GlobalSetting::find($id);
        if ($globalSetting->headerlogo) {
            Storage::delete($globalSetting->headerlogo);
            $globalSetting->headerlogo = null;
            $globalSetting->save();
        }
        return redirect()->back()->with('success', 'Header logo deleted successfully.');
    }
    public function deleteFavicon($id) {
        $globalSetting = GlobalSetting::find($id);
        if ($globalSetting->favicon) {
            Storage::delete($globalSetting->favicon);
            $globalSetting->favicon = null;
            $globalSetting->save();
        }
        return redirect()->back()->with('success', 'Favicon deleted successfully.');
    }
    public function deleteFooterLogo($id) {
        $globalSetting = GlobalSetting::find($id);
        if ($globalSetting->footerlogo) {
            Storage::delete($globalSetting->footerlogo);
            $globalSetting->footerlogo = null;
            $globalSetting->save();
        }
        return redirect()->back()->with('success', 'Footer logo deleted successfully.');
    }


    public function employeeOfTheMonth(Request $request) {
        $data_id = $request->data_id;

        if ($request->isMethod('GET')) {
            $employeeOfTheMonth = EmployeeOfThemMonth::first();
            $data = compact('employeeOfTheMonth');
            // dd($data);
            return view('backend.EmployeeOfTheMonth.employee-of-the-month')->with($data);
        } else {
            $employeeOfTheMonth = $data_id ? EmployeeOfThemMonth::find($data_id) : new EmployeeOfThemMonth();

            $rules = [];

            if (!$employeeOfTheMonth->employeeimage1) {
                $rules['employeeimage1'] = 'required|file|mimes:jpeg,jpg|max:150';
            }
            if (!$employeeOfTheMonth->employeeimage2) {
                $rules['employeeimage2'] = 'required|file|mimes:jpeg,jpg|max:150';
            }
            if (!$employeeOfTheMonth->employeeimage3) {
                $rules['employeeimage3'] = 'required|file|mimes:jpeg,jpg|max:150';
            }

            $request->validate($rules, [
                'employeeimage1.mimes' => 'Image must be a file of type: jpeg, jpg.',
                'employeeimage2.mimes' => 'Image must be a file of type: jpeg, jpg.',
                'employeeimage3.mimes' => 'Image must be a file of type: jpeg, jpg.',
                'employeeimage1.max' => 'The employeeimage1 field must not be greater than 150kb.',
                'employeeimage2.max' => 'The employeeimage2 field must not be greater than 150kb.',
                'employeeimage3.max' => 'The employeeimage3 field must not be greater than 150kb.',
            ]);

            // Handle image 1 upload and old image deletion
            if ($request->hasFile('employeeimage1')) {
                // Check if there is an existing image and delete it
                if ($employeeOfTheMonth->employeeimage1 && file_exists(public_path($employeeOfTheMonth->employeeimage1))) {
                    unlink(public_path($employeeOfTheMonth->employeeimage1));
                }

                $file = $request->file('employeeimage1');
                $filename = time() . '_employeeimage1.' . $file->getClientOriginalExtension();
                $file->move(public_path('upload'), $filename);
                $employeeOfTheMonth->employeeimage1 = 'upload/' . $filename;
            }

            // Handle image 2 upload and old image deletion
            if ($request->hasFile('employeeimage2')) {
                // Check if there is an existing image and delete it
                if ($employeeOfTheMonth->employeeimage2 && file_exists(public_path($employeeOfTheMonth->employeeimage2))) {
                    unlink(public_path($employeeOfTheMonth->employeeimage2));
                }

                $file = $request->file('employeeimage2');
                $filename = time() . '_employeeimage2.' . $file->getClientOriginalExtension();
                $file->move(public_path('upload'), $filename);
                $employeeOfTheMonth->employeeimage2 = 'upload/' . $filename;
            }

            // Handle image 3 upload and old image deletion
            if ($request->hasFile('employeeimage3')) {
                // Check if there is an existing image and delete it
                if ($employeeOfTheMonth->employeeimage3 && file_exists(public_path($employeeOfTheMonth->employeeimage3))) {
                    unlink(public_path($employeeOfTheMonth->employeeimage3));
                }

                $file = $request->file('employeeimage3');
                $filename = time() . '_employeeimage3.' . $file->getClientOriginalExtension();
                $file->move(public_path('upload'), $filename);
                $employeeOfTheMonth->employeeimage3 = 'upload/' . $filename;
            }

            // Save and return success message
            if ($employeeOfTheMonth->save()) {
                $message = $data_id ? 'Emoployee Of The Month updated successfully.' : 'Emoployee Of The Month added successfully.';
                return redirect()->back()->with('success', $message);
            }
        }
    }
    public function performerOfTheMonth(Request $request) {
        $data_id = $request->data_id;

        if ($request->isMethod('GET')) {
            $performerOfTheMonth = PerformerOfTheMonth::first();
            $data = compact('performerOfTheMonth');
            // dd($data);
            return view('backend.PerformerOfTheMonth.performer-of-the-month')->with($data);
        } else {
            $performerOfTheMonth = $data_id ? PerformerOfTheMonth::find($data_id) : new PerformerOfTheMonth();

            $rules = [];

            if (!$performerOfTheMonth->employeeimage1) {
                $rules['employeeimage1'] = 'required|file|mimes:jpeg,jpg|max:150';
            }
            if (!$performerOfTheMonth->employeeimage2) {
                $rules['employeeimage2'] = 'required|file|mimes:jpeg,jpg|max:150';
            }
            if (!$performerOfTheMonth->employeeimage3) {
                $rules['employeeimage3'] = 'required|file|mimes:jpeg,jpg|max:150';
            }

            $request->validate($rules, [
                'employeeimage1.mimes' => 'Image must be a file of type: jpeg, jpg.',
                'employeeimage2.mimes' => 'Image must be a file of type: jpeg, jpg.',
                'employeeimage3.mimes' => 'Image must be a file of type: jpeg, jpg.',
                'employeeimage1.max' => 'The innovative productions field must not be greater than 150kb.',
                'employeeimage2.max' => 'The innovative productions field must not be greater than 150kb.',
                'employeeimage3.max' => 'The innovative productions field must not be greater than 150kb.',

            ]);

            // Handle image 1 upload and old image deletion
            if ($request->hasFile('employeeimage1')) {
                // Check if there is an existing image and delete it
                if ($performerOfTheMonth->employeeimage1 && file_exists(public_path($performerOfTheMonth->employeeimage1))) {
                    unlink(public_path($performerOfTheMonth->employeeimage1));
                }

                $file = $request->file('employeeimage1');
                $filename = time() . '_employeeimage1.' . $file->getClientOriginalExtension();
                $file->move(public_path('upload'), $filename);
                $performerOfTheMonth->employeeimage1 = 'upload/' . $filename;
            }

            // Handle image 2 upload and old image deletion
            if ($request->hasFile('employeeimage2')) {
                // Check if there is an existing image and delete it
                if ($performerOfTheMonth->employeeimage2 && file_exists(public_path($performerOfTheMonth->employeeimage2))) {
                    unlink(public_path($performerOfTheMonth->employeeimage2));
                }

                $file = $request->file('employeeimage2');
                $filename = time() . '_employeeimage2.' . $file->getClientOriginalExtension();
                $file->move(public_path('upload'), $filename);
                $performerOfTheMonth->employeeimage2 = 'upload/' . $filename;
            }

            // Handle image 3 upload and old image deletion
            if ($request->hasFile('employeeimage3')) {
                // Check if there is an existing image and delete it
                if ($performerOfTheMonth->employeeimage3 && file_exists(public_path($performerOfTheMonth->employeeimage3))) {
                    unlink(public_path($performerOfTheMonth->employeeimage3));
                }

                $file = $request->file('employeeimage3');
                $filename = time() . '_employeeimage3.' . $file->getClientOriginalExtension();
                $file->move(public_path('upload'), $filename);
                $performerOfTheMonth->employeeimage3 = 'upload/' . $filename;
            }

            // Save and return success message
            if ($performerOfTheMonth->save()) {
                $message = $data_id ? 'Performer Of The Month updated successfully.' : 'Performer Of The Month added successfully.';
                return redirect()->back()->with('success', $message);
            }
        }
    }


    public function addTeam() {
        $title = 'Add Team';
        $url = url('admin/add-team');
        $data = compact('title', 'url');
        return view('backend.Team.add-team')->with($data);
    }
    public function storeTeam(Request $request){
        $team = new Team();
        $request->validate([
            'employeeimage' => 'required|file|mimes:jpeg,jpg|max:100',
            'employeename' => 'required|string|max:255',
            'designation' => 'required|string|max:255'
        ], [
            'employeeimage.required' => 'The employee image is required.',
            'employeeimage.mimes' => 'The employee image must be a file of type: jpeg, jpg.',
            'employeename.required' => 'The employee name is required.',
            'designation.required' => 'The designation is required.',
            'employeeimage.max' => 'The innovative productions field must not be greater than 100 kb.'
        ]);

        // Handle file upload
        if($request->hasFile('employeeimage')){
            $file = $request->file('employeeimage');
            $filename = time() . '_employeeimage.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $team->employeeimage1 = '/upload/' . $filename;
        }

        // Save other form inputs
        $team->employeename = $request->input('employeename');
        $team->designation = $request->input('designation');

        // Save to database
        $team->save();

        // Redirect with success message
        return redirect('/admin/manage-team')->with('success', 'Team Employee added successfully');
    }
    public function updateteam(Request $request, $id) {
        // Find the team by ID
        $teams = Team::find($id);

        // Validate the incoming request data
        $request->validate([
            'employeeimage' => 'nullable|file|mimes:jpeg,jpg|max:100',
            'employeename' => 'required|string|max:255',
            'designation' => 'required|string|max:255'
        ], [
            'employeeimage.mimes' => 'The employee image must be a file of type: jpeg, jpg.',
            'employeename.required' => 'The employee name is required.',
            'designation.required' => 'The designation is required.',
            'employeeimage.max' => 'The innovative productions field must not be greater than 100 kb.'
        ]);

        // Handle file upload if a new file is uploaded
        if($request->hasFile('employeeimage')){
            $file = $request->file('employeeimage');
            $filename = time() . '_employeeimage.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $teams->employeeimage1 = '/upload/' . $filename;
        }

        // Save other form inputs
        $teams->employeename = $request->input('employeename');
        $teams->designation = $request->input('designation');

        // Save the updated team to the database
        $teams->save();

        // Redirect with a success message
        return redirect('/admin/manage-team')->with('success', 'Team Employee updated successfully');
    }
    public function manageTeam(){
        $teams = Team::paginate(6);
        $data = compact('teams');
        // dd($data);
        return view('backend.Team.manage-team')->with($data);
    }
    public function editteam($id){
        $teams = Team::find($id);
        $title = 'Edit Team';
        $url = url('admin/manage-team/update') . "/" . $id;
        $data = compact('teams','title','url');
        return view('backend.Team.add-team')->with($data);
    }
    public function deleteTeam($id){
        $teams = Team::find($id);
        if ($teams->employeeimage1 && file_exists(public_path($teams->employeeimage1))) {
            unlink(public_path($teams->employeeimage1));
        }
        $teams->delete();
        return back();
    }
    public function statusTeam($id, $status){
        $teams = Team::find($id);
        $teams->status = $status;
        $teams->save();
        return back();
    }


    public function addInnovativeProductions(){
        $title = 'Add Innovative Productions';
        $url = url('/admin/add-innovative-productions');
        $data = compact('title', 'url');
        return view('backend.Production.add-innovative-productions')->with($data);
    }
    public function storeInnovativeProductions(Request $request){
        $innovative = new InnovativeProductions();
        $request->validate([
            'innovative_productions' => 'required|file|mimes:jpeg,jpg|max:150',
        ], [
            'innovative_productions.required' => 'The Innovative Productions image is required.',
            'innovative_productions.mimes' => 'The Innovative Productions image must be a file of type: jpeg, jpg.',
            'innovative_productions.max' => 'The innovative productions field must not be greater than 150 kb.',
        ]);
        if($request->hasFile('innovative_productions')){
            $file = $request->file('innovative_productions');
            $filename = time() . '_innovative_productions.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $innovative->innovative_productions = '/upload/' . $filename;
        }
        // Save to database
        $innovative->save();
        return redirect('/admin/manage-innovative-productions')->with('success', 'Innovative Productions added successfully');
    }
    public function manageInnovativeProductions(){
        $innovative = InnovativeProductions::orderBy('created_at', 'desc')->paginate(6);
        $data = compact('innovative');
        // dd($data);
        return view('backend.Production.manage-innovative-productions')->with($data);
    }
    public function editInnovativeProductions($id){
        $innovative = InnovativeProductions::find($id);
        $title = 'Edit Innovative Productions';
        $url = url('/admin/manage-innovative-productions/update') . "/" . $id;
        $data = compact('innovative','title', 'url');
        // dd($data);
        return view('backend.Production.add-innovative-productions')->with($data);
    }
    public function updateInnovativeProductions(Request $request, $id){
        $innovative =  InnovativeProductions::find($id);
        $request->validate([
            'innovative_productions' => 'required|file|mimes:jpeg,jpg|max:150',
        ], [
            'innovative_productions.required' => 'The Innovative Productions image is required.',
            'innovative_productions.mimes' => 'The Innovative Productions image must be a file of type: jpeg, jpg.',
            'innovative_productions.max' => 'The innovative productions field must not be greater than 150 kb.',
        ]);
        if($request->hasFile('innovative_productions')){
            if ($innovative->innovative_productions && file_exists(public_path($innovative->innovative_productions))) {
                unlink(public_path($innovative->innovative_productions));
            }
            $file = $request->file('innovative_productions');
            $filename = time() . '_innovative_productions.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $innovative->innovative_productions = '/upload/' . $filename;
        }
        // Save to database
        $innovative->save();
        return redirect('/admin/manage-innovative-productions')->with('success', 'Innovative Productions updated successfully');
    }
    public function deleteInnovativeProductions($id){
        $innovative = InnovativeProductions::find($id);
        if ($innovative->innovative_productions && file_exists(public_path($innovative->innovative_productions))) {
            unlink(public_path($innovative->innovative_productions));
        }
        $innovative->delete();
        return back();
    }
    public function statusInnovativeProductions($id, $status){
        $innovative = InnovativeProductions::find($id);
        $innovative->status = $status;
        $innovative->save();
        return back();
    }


    public function addProductionsStudio(){
        $title = 'Add Productions Studio';
        $url = url('/admin/add-productions-studio');
        $data = compact('title', 'url');
        // dd($data);
        return view('backend.Production.add-productions-studio')->with($data);;
    }
    public function storeProductionsStudio(Request $request){
        $studio = new ProductionsStudio();
        $request->validate([
            'studio_productions' => 'required|file|mimes:jpeg,jpg|max:150',
        ],[
            'studio_productions.required' => 'The studio productions image is required.',
            'studio_productions.mimes' => 'The studio productions image must be a file of type: jpeg, jpg.',
            'studio_productions.max' => 'The studio productions field must not be greater than 150 kb.',
        ]);
        if($request->hasFile('studio_productions')){
            $file = $request->file('studio_productions');
            $filename = time(). '_studio_productions.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'),$filename);
            $studio->studio_productions = '/upload/' . $filename;
        }
        $studio->save();
        return redirect('/admin/manage-productions-studio')->with('success', ' Productions Studio added successfully');
    }
    public function manageProductionsStudio(){
        $studio = ProductionsStudio::orderBy('created_at', 'desc')->paginate(6);
        $data = compact('studio');
        // dd($data);
        return view('backend.Production.manage-productions-studio')->with($data);
    }
    public function editProductionsStudio($id){
        $studio = ProductionsStudio::find($id);
        $title ="Edit Productions Studio";
        $url = url('/admin/manage-productions-studio/update'). "/" . $id;
        $data = compact('title', 'url','studio');
        return view('backend.Production.add-productions-studio')->with($data);
    }
    public function updateProductionsStudio(Request $request, $id){
        $studio = ProductionsStudio::find($id);
        $request->validate([
            'studio_productions' => 'required|file|mimes:jpeg,jpg|max:150',
        ],[
            'studio_productions.required' => 'The studio productions image is required.',
            'studio_productions.mimes' => 'The studio productions image must be a file of type: jpeg, jpg.',
            'studio_productions.max' => 'The studio productions field must not be greater than 150 kb.',
        ]);
        if($request->hasFile('studio_productions')){
            if ($studio->studio_productions && file_exists(public_path($studio->studio_productions))) {
                unlink(public_path($studio->studio_productions));
            }
            $file = $request->file('studio_productions');
            $filename = time(). '_studio_productions.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'),$filename);
            $studio->studio_productions = '/upload/' . $filename;
        }

        $studio->save();
        return redirect('/admin/manage-productions-studio')->with('success', 'Productions Studio updated successfully');

    }
    public function statusproductionsStudio($id, $status){
        $studio = ProductionsStudio::find($id);
        $studio->status = $status;
        $studio->save();
        return back();
    }
    public function deleteProductionsStudio($id){
        $studio = ProductionsStudio::find($id);
        if ($studio->studio_productions && file_exists(public_path($studio->studio_productions))) {
            unlink(public_path($studio->studio_productions));
        }
        $studio->delete();
        return back();
    }


    public function addCatalogue(){
        $title = "Add Catalogue";
        $url = url('/admin/add-catalogue');
        $data = compact('title','url');
        return view('backend.Catalogue.add-catalogue')->with($data);
    }
    public function storeCatalogue(Request $request) {
        $catalogue = new Catalogue();
        $request->validate([
            'serial_image' => 'required|file|mimes:jpeg,jpg|max:150',
            'serial_title' => 'required|string|max:255',
            'serial_url' => 'url|nullable',
            'number_episodes' => 'required|numeric', // Only numeric values
            'languages' => 'required|string',
            'time' => 'required|numeric', // Only numeric values
        ],[
            'serial_image.mimes' => 'The serial image must be a file of type: jpeg, jpg.',
            'serial_image.max' => 'The serial image field must not be greater than 150kb.', // Fixed the error message reference
            'number_episodes.numeric' => 'The number of episodes must be a numeric value.',
            'time.numeric' => 'The time field must be a numeric value.',
        ]);
        if($request->hasFile('serial_image')){
            $file = $request->file('serial_image');
            $filename = time(). '_serial_image.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $catalogue->serial_image = '/upload/' .$filename;
        }
        $catalogue->serial_title = $request->input('serial_title');
        $catalogue->serial_url = $request->input('serial_url');
        $catalogue->number_episodes = $request->input('number_episodes');
        $catalogue->languages = $request->input('languages');
        $catalogue->time = $request->input('time');
        $catalogue->save();
        return redirect('/admin/manage-catalogue')->with('success', ' Catalogue added successfully');
        // Continue with logic to store the catalogue
    }
    public function manageCatalogue(){
        $catalogue = Catalogue::orderBy('created_at', 'desc')->paginate(6);
        $data = compact('catalogue');
        // dd($data);
        return view('backend.Catalogue.manage-catalogue')->with($data);
    }
    public function editCatalogue($id){
        $catalogue = Catalogue::find($id);
        $title = "Edit Catalogue";
        $url = url('/admin/manage-catalogue/update') . "/" . $id;
        $data = compact('catalogue', 'title', 'url');
        return view('backend.Catalogue.add-catalogue')->with($data);
    }
    public function updateCatalogue(Request $request, $id){
        $catalogue = Catalogue::find($id);
        $request->validate([
            'serial_image' => $catalogue->serial_image ? 'nullable|file|mimes:jpeg,jpg|max:150' : 'required|file|mimes:jpeg,jpg|max:150',
            'serial_title' => 'required|string|max:255',
            'serial_url' => 'url|nullable',
            'number_episodes' => 'required|numeric', // Only numeric values
            'languages' => 'required|string',
            'time' => 'required|numeric', // Only numeric values
        ],[
            'serial_image.mimes' => 'The serial image must be a file of type: jpeg, jpg.',
            'serial_image.max' => 'The serial image field must not be greater than 150kb.', // Fixed the error message reference
            'number_episodes.numeric' => 'The number of episodes must be a numeric value.',
            'time.numeric' => 'The time field must be a numeric value.',
        ]);
        if($request->hasFile('serial_image')){
            if ($catalogue->serial_image && file_exists(public_path($catalogue->serial_image))) {
                unlink(public_path($catalogue->serial_image));
            }
            $file = $request->file('serial_image');
            $filename = time(). '_serial_image.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload'), $filename);
            $catalogue->serial_image = '/upload/' .$filename;
        }
        $catalogue->serial_title = $request->input('serial_title');
        $catalogue->serial_url = $request->input('serial_url');
        $catalogue->number_episodes = $request->input('number_episodes');
        $catalogue->languages = $request->input('languages');
        $catalogue->time = $request->input('time');
        $catalogue->save();
        return redirect('/admin/manage-catalogue')->with('success', ' Catalogue updated successfully');
    }
    public function statusCatalogue($id, $status){
        $catalogue = Catalogue::find($id);
        $catalogue->status = $status;
        $catalogue->save();
        return back();
    }
    public function deleteCatalogue($id){
        $catalogue = Catalogue::find($id);
        if ($catalogue->serial_image && file_exists(public_path($catalogue->serial_image))) {
            unlink(public_path($catalogue->serial_image));
        }
        $catalogue->delete();

        return back();
    }

    public function addJob(){
        $title = "Add Job";
        $url = url('/admin/add-job');
        $data = compact('title', 'url');
        return view('backend.Job.add-job')->with($data);
    }
    public function storeJob(Request $request){
            $job = new Job();
         $request->validate([
            'job_name' => 'required|string',
            'slug' => 'required|string',
            'no_opening' => 'required',
            'experience' => 'required',
            'job_type' => 'required|string',
            'job_location' => 'required|string',
            'job_description' => 'required',
        ]);
            $job->job_name = $request->input('job_name');
            $job->slug = $request->input('slug');
            $job->no_opening = $request->input('no_opening');
            $job->experience = $request->input('experience');
            $job->job_type = $request->input('job_type');
            $job->job_location = $request->input('job_location');
            $job->job_description = $request->input('job_description');
            $job->save();
            return redirect('/admin/manage-job')->with('success', ' Job added successfully');
    }
    public function manageJob(){
        $job = Job::orderBy('created_at', 'desc')->paginate(6);
        $data = compact('job');
        return view('backend.Job.manage-job')->with($data);
    }
    public function editJob($id){
        $job = Job::find($id);
        $title = "Edit Job";
        $url = url('/admin/manage-job/update') . "/" . $id;
        $data = compact('url', 'title','job');
        // dd($data);
        return view('backend.Job.add-job')->with($data);

    }
    public function jobData(){
        $jobdata = JobData::orderBy('created_at', 'desc')->paginate(6);
        $data = compact('jobdata');
        // dd($data);
        return View('backend.Job.job-data')->with($data);
    }
    public function updateJob(Request $request, $id){
        $job = Job::find($id);
        $request->validate([
            'job_name' => 'required|string',
            'slug' => 'required|string',
            'no_opening' => 'required',
            'experience' => 'required',
            'job_type' => 'required|string',
            'job_location' => 'required|string',
            'job_description' => 'required',
        ]);
            $job->job_name = $request->input('job_name');
            $job->slug = $request->input('slug');
            $job->no_opening = $request->input('no_opening');
            $job->experience = $request->input('experience');
            $job->job_type = $request->input('job_type');
            $job->job_location = $request->input('job_location');
            $job->job_description = $request->input('job_description');
            $job->save();
            return redirect('/admin/manage-job')->with('success', ' Job Updated successfully');
    }
    public function opencloseJob($id,$opening){
        $job = Job::find($id);
        $job->opening = $opening;
        $job->save();
        return back();
    }
    public function statusJob($id, $status){
        $job = Job::find($id);
        $job->status = $status;
        $job->save();
        return back();
    }
    public function deleteJob($id){
            $job = Job::find($id);
            $job->delete();
            return back();
    }
    public function ConnectHere(){
        $contactfm = ContactUs::orderBy('created_at', 'desc')->paginate(6);
        $data = compact('contactfm');
        return view('backend.ContectUs.contect_here_data')->with($data);
    }

}
