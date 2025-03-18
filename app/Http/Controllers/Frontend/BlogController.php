<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $blog = Blog::get();
        $data = compact('blog');
        return view('frontend.blog')->with($data);
    }

    public function blogDetail($slug){
        $blog  = Blog::where('slug',$slug)->first();
        $data = compact('blog');
        return view('frontend.blog_detail')->with($data);
    }
}
