<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
     public function contact (){
        return view('pages.contactUs');
     }

     public function contactsend(Request $request){
          

        $request->validate([
            'email'=>'required|min:6',
            'subject'=>'required',
            'message'=>'required'

        ]);

        Mail::to('admin@gmail.com')->send(new ContactMail($request->email,$request->subject,$request->message));
        return back();
     }
}
