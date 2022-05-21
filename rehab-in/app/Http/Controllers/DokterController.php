<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DokterController extends Controller
{
    public function index(){
        return view('dokter.home');
    }
    public function login(){
        return view('dokter.login');
    }
    public function authdok(Request $request){
        // dd($request);
        $cred = $request->validate([
            'username' => 'required|exists:users',
            'password' => 'required|min:6',
            // 'role' => 'required'
        ]);

        // dd("after validate");
        if (Auth::attempt($cred)) {
            if(Auth::user()->role == 2){
            $request->session()->regenerate();
            return redirect()->intended('/dokter');
            } else{
                return back()->with('loginError','Login failed!');        
            }

        }
        return back()->with('loginError','Login failed!');

    }

    public function register(){
        return view('');
    }
    public function forgetpw(){
        return view('');
    }
}
