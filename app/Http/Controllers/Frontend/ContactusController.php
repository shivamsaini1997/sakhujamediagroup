<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
    public function conatctUs(){
        return view('frontend.contact_us');
    }
    public function contactForm(Request $request){
        $contectfm = new ContactUs();
        $request->validate([
            'your_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'how_can_we_help' => 'required|string',
            'your_query' => 'nullable|string',
        ]);
        $contectfm->your_name = $request->input('your_name');
        $contectfm->email = $request->input('email');
        $contectfm->phone = $request->input('phone');
        $contectfm->how_can_we_help = $request->input('how_can_we_help');
        $contectfm->your_query = $request->input('your_query');
        $contactform = [
            'your_name' => $contectfm->your_name,
            'email' => $contectfm->email,
            'phone' => $contectfm->phone,
            'how_can_we_help' => $contectfm->how_can_we_help,
            'your_query' => $contectfm->your_query,
        ];

    // Send the email
        Mail::send('emails.contact_us-email', $contactform, function($message) {
            $message->to('sakhujamediagroup@gmail.com');
            $message->subject('New Job Application Submitted');
        });
        $contectfm->save();
        return redirect()->back()->with('success', 'Form Submit Successfully Thank You!');

    }
}
