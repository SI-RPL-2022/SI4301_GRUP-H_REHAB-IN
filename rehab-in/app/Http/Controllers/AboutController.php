<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kontak;

class AboutController extends Controller
{
    public function index()
    {
        return view('about');   
    }

    public function addmessage(Request $request){
        $message = new Kontak();
        $message->guest_name=$request->guest_name;
        $message->email=$request->email;
        $message->subject=$request->subject;
        $message->messages=$request->messages;
    
        $message->save();

        return redirect(route('about'));
        
    }
}
