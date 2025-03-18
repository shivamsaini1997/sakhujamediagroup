<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Catalogue;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function catalogue(){
        $catalogue = Catalogue::where('status', 1)->orderBy('created_at', 'desc')->get();
        $data = compact('catalogue');
        return view('frontend.catalogue')->with($data);
    }
}
