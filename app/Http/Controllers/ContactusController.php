<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactusMailable;
use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
    public function index(){
        return view('contactus.index');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $email = new ContactusMailable($request->all());
    Mail::to('thezenway15@gmail.com')->send($email);

    return redirect()->route('contactus.index')->with('info', 'Message Sent!');
    }
}
