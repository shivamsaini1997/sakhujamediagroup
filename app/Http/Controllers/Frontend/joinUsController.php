<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class joinUsController extends Controller
{
    public function joinUs(){
        $job = Job::where('status', 1)->orderBy('created_at', 'desc')->get();
        $data = compact('job');
        // dd($data);
        return view('frontend.join_us')->with($data);
    }
    public function joinUsDetails($slug){
        $job = Job::where('slug',$slug)->first();
        $data = compact('job');
        // dd($data);

        return view('frontend.join_us_detail')->with($data);
    }
    public function storeJobData(Request $request){
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|digits:10',
            'linkedin' => 'nullable|url',
            'current_designation' => 'required|string|max:255',
            'resume' => 'required|mimes:pdf|max:2048',
        ],[
            'full_name.required' => 'The full name is required.',
            'full_name.string' => 'The full name must be a valid string.',
            'full_name.max' => 'The full name must not exceed 255 characters.',

            'email.required' => 'The email is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.max' => 'The email must not exceed 255 characters.',

            'phone.required' => 'The phone number is required.',
            'phone.digits' => 'The phone number must be exactly 10 digits.',

            'linkedin.url' => 'Please provide a valid LinkedIn profile URL.',

            'current_designation.string' => 'The current designation must be a valid string.',
            'current_designation.max' => 'The current designation must not exceed 255 characters.',

            'resume.required' => 'The resume is required.',
            'resume.mimes' => 'The resume must be a PDF file.',
            'resume.max' => 'The resume must not be larger than 2MB.',
        ]);

            // Store the data
            $jobdata = new JobData();
            $jobdata->job_profile = $request->input('job_profile');
            $jobdata->full_name = $request->input('full_name');
            $jobdata->email = $request->input('email');
            $jobdata->phone = $request->input('phone');
            $jobdata->linkedin = $request->input('linkedin');
            $jobdata->current_designation = $request->input('current_designation');

            // Handle file upload
            if ($request->hasFile('resume')) {
                $file = $request->file('resume');
                $fullName = preg_replace('/\s+/', '_', strtolower($request->input('full_name'))); // Replace spaces with underscores
                $extension = $file->getClientOriginalExtension(); // Get the file extension
                $filename = $fullName . '_' . 'resume' . '.' . $extension; // Combine full name, timestamp, and extension
                $file->move(public_path('resume'), $filename);
                $jobdata->resume = '/resume/' . $filename;
            }
            $jobDataForEmail = [
                'full_name' => $jobdata->full_name,
                'email' => $jobdata->email,
                'phone' => $jobdata->phone,
                'linkedin' => $jobdata->linkedin,
                'current_designation' => $jobdata->current_designation,
                'job_profile' => $jobdata->job_profile,
                'resume' => $jobdata->resume,
            ];

        // Send the email
            Mail::send('emails.job_data_email', $jobDataForEmail, function($message) {
                $message->to('sakhujamediagroup@gmail.com');
                $message->subject('New Contact Us Form Submission');
            });
            $jobdata->save();

            return redirect()->back()->with('success', 'Form Submit Successfully Thank You!');
    }
}
