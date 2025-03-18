<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\InnovativeProductions;
use App\Models\ProductionsStudio;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    public function production(){
        $studio = ProductionsStudio::where('status', 1)->orderBy('created_at', 'desc')->get();
        $innovative = InnovativeProductions::where('status', 1)->orderBy('created_at', 'desc')->get();
        $data = compact('innovative','studio');
        // dd($data);
        return view('frontend.production')->with($data);
    }
}
