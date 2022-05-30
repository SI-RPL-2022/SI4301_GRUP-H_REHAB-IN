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
        return view('dokter.regisdok');
    }

    public function registerdokter(Request $request){

        if($request->password == $request->confpw){
            // dd($request);
            $validated = $request->validate([
                'name' => 'required|max:255',
                'username' => 'required|min:6|unique:users',
                'email' => 'required|email:dns',
                'password' => 'required|min:6|max:255',
                'nohp' => 'required|min:10|max:13',
                'address' => 'required|min:10',
                'tanggallahir' => 'required',
                'role' => 'required'
            ]);

            $validated['password'] = Hash::make($validated['password']);
            User::create($validated);
            return redirect('/login-dokter')->with('success', 'Registrasi Berhasil, plase login!');
        }else{
            return redirect('/regisdok')->with('Failure','Password Tidak Sama');
        }

    }

    public function forgetpw(){
        return view('');
    }
}
