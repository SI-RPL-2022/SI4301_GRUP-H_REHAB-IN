<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;
use App\models\Kamar;
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

    //tambah dokter
    public function adddokter(Request $request){

        $user = new User();
        $user->name=$request->nama_lengkap;
        $user->email=$request->email;
        $user->nohp=$request->nohp;
        $user->address=$request->address;
        $user->tanggallahir=$request->tanggallahir;
        $user->password=$request->password;
        $user->role=$request->role;
    
        $user->save();

        return redirect(route('dbdokter'));
        // return view('admin.tips');
    }

    public function dbdokter(){
        $user = User::all();
        return view('admin.dbdokter', compact('user'));
    }

    // Forget Password For USER
    public function ForgetPassword() {
        return view('user.forgetpw');
    }

    public function ForgetPasswordStore(Request $request) {
        //Valid the value of form email
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $email = $request->email;
        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('user.forget-password-email', ['email'=> $email, 'token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have emailed your password reset link!');
    }

    public function ResetPassword($token,$email) {
        $email = DB::table('password_resets')->where('email',$email)->first();
        $token = DB::table('password_resets')->where('token',$token)->first();
        return view('user.forget-password-link', ['email' => $email,'token' => $token]);
    }

    public function ResetPasswordStore(Request $request) {
        if($request->password == $request->password_confirmation){
            $validated = $request->validate([
                'password' => 'required|min:6|confirmed',
                'password_confirmation' => 'required'
            ]);
            
            $password = $request->password;

            $Data = DB::table('password_resets')->where('token',$request->token)->first();
            if(!$Data){
                return redirect()->route('login')->with('error', 'Invalid token!');
            }else {
                $user = User::where('email',$Data->email)->first();
                if (!$user) return redirect()->back()->withErrors(['email' => 'Email not found']);
                $user->password = Hash::make($password);
                $user->save();
                DB::table('password_resets')->where('email', $user->email)
                ->delete();
                return redirect()->route('login')->with('message', 'Your password has been successfully changed!');
            }
        }else{
            return back()->with('Failure','Password Tidak Sama!');
        }
        // return redirect()->route('login')->with('message', 'Your password has been successfully changed!');
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
    public function kamar(){
        $kamar = Kamar::all();
        $jumlah = DB::table('kamars')->count();
        return view('user.reservasi',compact('kamar','jumlah'));
    }
    public function ruangan($id){
        $kamar = Kamar::find($id);
        $user = Auth::User();
        return view('user.ruangan',['kamar'=>$kamar,'user'=>$user]);
    }
    public function dokter(){
        // $dokter = DB::table('users')->where('role','2')
        $dokter = User::where('role',2)->get();
        $jumlahdokter = User::where('role',2)->count();
        return view('user.dokter', compact('dokter','jumlahdokter'));
    }
    public function jadwal($id){
        $doc = User::find($id);
        return view('user.jadwal',['doc'=>$doc]);
    }
    public function total(){
        return view('user.result');
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
