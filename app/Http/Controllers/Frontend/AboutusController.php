<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function aboutUs(){
        return view('frontend.about_us');
    }
}
