<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DigitalAssetsFacebook;
use App\Models\DigitalAssetsYoutube;
use Illuminate\Http\Request;

class DigitalAssetsController extends Controller
{
    public function DigitalAssets(){
        $youtubeassets = DigitalAssetsYoutube::where('status', 1)->orderBy('created_at', 'desc')->get();
        $facebookasssets =DigitalAssetsFacebook::where('status', 1)->orderBy('created_at', 'desc')->get();
        $data = compact('youtubeassets','facebookasssets');
        // dd($data);
        return view('frontend.digital_assets')->with($data);
    }
}
