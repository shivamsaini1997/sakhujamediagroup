<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\EmployeeOfThemMonth;
use App\Models\PerformerOfTheMonth;
use App\Models\Team;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function careers(){
        $employeeOfTheMonth = EmployeeOfThemMonth::first();
        $performerOfTheMonth = PerformerOfTheMonth::first();
        $teams = Team::where('status', 1)->get();
        $data = compact('employeeOfTheMonth','performerOfTheMonth','teams');
        // dd($data);
        return view('frontend.careers')->with($data);
    }
}
