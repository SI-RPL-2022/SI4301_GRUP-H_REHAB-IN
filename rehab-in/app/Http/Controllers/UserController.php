<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('user.login');
    }

    public function loginpasien(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/pasien');
        }
 
        return back()->with('loginError','Login failed!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect ('/');
    }

    public function register(){
        return view('user.register');
    }

    public function registerpasien(Request $request){
        
        if($request->password == $request->confpw){
            $validated = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email:dns|unique:users',
                'password' => 'required|min:6|max:255',
                'nohp' => 'required|min:10|max:13',
                'address' => 'required|min:10',
                'tanggallahir' => 'required'
            ]);

            $validated['password'] = Hash::make($validated['password']);
            User::create($validated);
            return redirect('/login')->with('success', 'Registrasi Berhasil, plase login!');
        }else{
            return redirect('/register')->with('Failure','Password Tidak Sama');
        }
        
    }

    public function forgetpw(){
        return view('user.forgetpw');
    }

    public function riwayat(){
        return view('user.riwayat');
    }

    public function notes(){
        return view('user.notes');
    }

    public function profile(Request $request){
        $id = $request->id;
        $Data = User::where('id',$id)->first();
        return view('user.profile',compact('Data'));
    }

    public function editprofile($user){
        $data = User::find($user);
        return view('user.profile-edit')->with('data',$data);
    }
    public function services(){
        return view('user.service');
    }
    public function reservasi(){
        return view('user.reservasi');
    }
    public function ruangan(){
        return view('user.ruangan');
    }
    public function dokter(){
        return view('user.dokter');
    }
    public function edukasi(){
        return view('user.service');
    }
    public function total(){
        return view('user.result');
    }
    public function jadwal(){
        return view('user.jadwal');
    }
    public function invoicedoc(){
        return view('user.result');
    }
    public function konsultasi(){
        return view('user.konsultasi');
    }
    public function history(){
        return view('user.historypayment');
    }
}
