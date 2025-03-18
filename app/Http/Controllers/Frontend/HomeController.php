<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DigitalAssetsYoutube;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $home = Home::first();
        $youtubedigital = DigitalAssetsYoutube::where('status', 1)->orderBy('created_at', 'desc')->paginate(6);
        $data = compact('home','youtubedigital');
        // dd($data);
        return view('frontend.index')->with($data);
    }
}
