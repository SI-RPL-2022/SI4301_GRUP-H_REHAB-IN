<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login(){
        return view('user.login');
    }

    public function loginpasien(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:6',
            'role' => '0'
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

    // public function forgetpw(){
    //     return view('user.forgetpw');
    // }

    // Forget Password For USER

    public function ForgetPassword() {
        return view('user.forgetpw');
    }

    public function ForgetPasswordStore(Request $request) {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('user.forget-password-email', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have emailed your password reset link!');
    }

    public function ResetPassword($token) {
        $token = DB::table('passowrd_resets')->where('token',$token)->first();
        return view('user.forget-password-link', ['token' => $token]);
    }

    public function ResetPasswordStore(Request $request) {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required'
        ]);

        $update = DB::table('password_resets')->where(['email' => $request->email, 'token' => $request->token])->first();

        if(!$update){
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

        // Delete password_resets record
        DB::table('password_resets')->where(['email'=> $request->email])->delete();

        return redirect('/login')->with('message', 'Your password has been successfully changed!');
    }

    public function riwayat(){
        return view('user.riwayat');
    }

    public function notes(){
        return view('user.notes');
    }

    public function profile(){
        $user = Auth::User();
        return view('user.profile',compact('user'));
    }

    public function show(){
        $user = Auth::User();
        return view('user.profile-edit', compact('user'));
    }

    public function updateprofile(Request $request){
        //validate form
        $this->validate($request, [
            'pic'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'max:255',
            'tanggallahir' => 'required'
        ]);

        //upload image

        $Name = $request->pic->getClientOriginalName() . '-' . time()
        . '.' . $request->pic->extension();
        $request->pic->move(public_path('userProfile'),$Name);

        $id = $request->id;
        //create post
        User::find($id)->update([
            'pic'     => $Name,
            'name'     => $request->name,
            'nohp'     => $request->nohp,
            'address'     => $request->address,
            'tanggallahir'   => $request->tanggallahir
        ]);

        //redirect to index
        return redirect()->route('user-profile')->with(['success' => 'Data Berhasil Disimpan!']);
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
