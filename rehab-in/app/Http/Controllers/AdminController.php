<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Tip;
use App\Models\Admin;
use App\Models\User;
use App\Models\Kamar;
use App\Models\Notesehat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }
    
    public function artikel(){

        $artikel = Artikel::all();
        // dd($artikel);
        return view('admin.article', compact('artikel'));
    }

    public function artikelid($id){

        $artikel = Artikel::find($id);
        // dd($artikel);
        return response()->json([
            'data' => $artikel
          ]);
    }


    public function addArtikel(Request $request){
        
        $gambar = time().'image'.'.'.$request->image_art->extension();

        $request->image_art->move(public_path('images'),$gambar);

        $artikel = new Artikel();
        $artikel->judul_artikel=$request->judul_artikel;
        $artikel->penulis=$request->penulis;
        $artikel->image_art=$gambar;
        $artikel->konten=$request->konten;
    
        $artikel->save();

        return redirect(route('artikeladm'));
    }

    public function updateArtikel(Request $request){
        $artikel = Artikel::find($request->id);
        $artikel->judul_artikel=$request->judul_artikel;
        $artikel->penulis=$request->penulis;
        $gambar=$request->image_art;
        if($gambar != null){
            $gambar = time().'image'.'.'.$request->image_art->extension();
            $request->image_art->move(public_path('images'),$gambar);
            $artikel->image_art=$gambar;
        }
        
        $artikel->konten=$request->konten;

        $artikel->update();
        return redirect(route('artikeladm'));
    }

    public function deleteArtikel($id){
        $artikel = Artikel::find($id);

        $artikel->delete();


        return redirect(route('artikeladm'));
    }

    public function tipskes(){
        $tips = Tip::all();
        // dd($artikel);
        return view('admin.tips', compact('tips'));
        // return view('admin.tips');
    }


    public function tipsid($id){

        $tips = Tip::find($id);
        // dd($artikel);
        return response()->json([
            'data' => $tips
          ]);
    }

    public function addTips(Request $request){

        $gambar = time().'image'.'.'.$request->pic->extension();

        $request->pic->move(public_path('images'),$gambar);

        $tips = new Tip();
        $tips->judul=$request->judul;
        $tips->penulis=$request->penulis;
        $tips->pic=$gambar;
        $tips->desc=$request->desc;
    
        $tips->save();

        return redirect(route('tipskesadm'));
        // return view('admin.tips');
    }


    public function updateTips(Request $request){
        $tips = Tip::find($request->id);
        $tips->judul=$request->judul;
        $tips->penulis=$request->penulis;
        $gambar=$request->pic;
        if($gambar != null){
            $gambar = time().'image'.'.'.$request->pic->extension();
            $request->pic->move(public_path('images'),$gambar);
            $tips->pic=$gambar;
        }
        
        $tips->desc=$request->desc;

        $tips->update();
        return redirect(route('tipskesadm'));
    }

    public function deleteTips($id){
        $tips = Tip::find($id);
        $tips->delete();

        return redirect(route('tipskesadm'));
    }


    public function jadwalkonsul(){
        return view('admin.jadwalkonsul');
    }

    public function notes(){

        $notesehat = Notesehat::all();
        // dd($artikel);
        return view('admin.notes', compact('notesehat'));

    }

    public function notesid($id){

        $notesehat = Notesehat::find($id);
        // dd($artikel);
        return response()->json([
            'data' => $notesehat
          ]);
    }


    public function service(){
        return view('admin.services');
    }

    public function reservasi(){
        return view('admin.reservasi');
    }

    public function listdokter(){
        return view('admin.listdokter');
    }

    public function edukasi(){
        return view('admin.edukasi');
    }

    public function dbpasien(){
        return view('admin.dbpasien');
    }

    public function regpasien(){
        return view('admin.regpasfromadm');
    }

    public function registpasien(Request $request){

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
            return redirect('/admin/dbpasien')->with('success', 'Registrasi Berhasil');
        }else{
            return redirect('/regpasien')->with('Failure','Password Tidak Sama');
        }

    }

    public function dbdokter(){
        $dokter = User::where('role',2)->get();
        return view('admin.dbdokter', compact('user'));
    }

    public function dbadmin(){
        $admin = User::where('role',1)->get();
        return view('admin.dbadmin', compact('admin'));

    }

    public function dbadminid($id){

        $admin = Admin::find($id);
        // dd($artikel);
        return response()->json([
            'data' => $admin
          ]);
    }

    public function addadmin(Request $request){

        $admin = new Admin();
        $admin->nama_lengkap=$request->nama_lengkap;
        $admin->email=$request->email;
        $admin->username=$request->username;
        $admin->password=$request->password;
    
        $admin->save();

        return redirect(route('dbadmin'));
        // return view('admin.tips');
    }

    public function updateDadmin(Request $request){
        $admin = Admin::find($request->id);
        $admin->nama_lengkap=$request->nama_lengkap;
        $admin->email=$request->email;
        $admin->username=$request->username;
        $admin->password=$request->password;

        $admin->update();
        return redirect(route('dbadmin'));
    }

    public function delDadmin($id){
        $admin = Admin::find($id);
        $admin->delete();
        return redirect(route('dbadmin'));
    }


    public function kamar(){
        $kamar = Kamar::all();
        // dd($artikel);
        return view('admin.kamar', compact('kamar'));

        
    }

    public function kamarid($id){

        $kamar = Kamar::find($id);
        return response()->json([
            'data' => $kamar
          
            
          ]);
    }

    public function addKamar(Request $request){
        $gambar = time().'image'.'.'.$request->pic->extension();

        $request->pic->move(public_path('images'),$gambar);

        $kamar = new Kamar();
        
        $kamar->no_kamar=$request->no_kamar;
        $kamar->nama_kamar=$request->nama_kamar;
        $kamar->kelas=$request->kelas;
        $kamar->facility= implode(',', $request->facility);
        
        $kamar->code=$request->code;
        $kamar->pic=$gambar;
        $kamar->price=$request->price;

        $kamar->save();

        return redirect(route('kamaradm'));
    }

    public function updateKamar(Request $request){

        $kamar = Kamar::find($request->id);
        $kamar->no_kamar=$request->no_kamar;
        $kamar->nama_kamar=$request->nama_kamar;
        $kamar->kelas=$request->kelas;
        $kamar->facility= implode(',', $request->facility);
        
        $kamar->code=$request->code;
        $kamar->price=$request->price;
        $gambar=$request->pic;
        if($gambar != null){
            $gambar = time().'image'.'.'.$request->pic->extension();
            $request->pic->move(public_path('images'),$gambar);
            $kamar->pic=$gambar;
        }

        $kamar->update();
        return redirect(route('kamaradm'));
    }

    public function deleteKamar($id){
        $kamar = Kamar::find($id);

        $kamar->delete();


        return redirect(route('kamaradm'));
    }

    public function loginadm(){
        return view('admin.login');
    }

    public function logoutadm(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect ('/admin/login');
    }
    public function authadm(Request $request){
        // dd($request);
        $cred = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:6',
            'role' => 'required'
        ]);

        // dd("after validate");
        if (Auth::attempt($cred)) {
            if(Auth::user()->role == 1){
            $request->session()->regenerate();
            return redirect()->intended('/admin');
            } else{
                return back()->with('loginError','Login failed!');        
            }

        }
        return back()->with('loginError','Login failed!');

    }

    public function registeradm(){
        return view('admin.register');
    }

    public function regisadmin(Request $request){

        if($request->password == $request->confpw){
            // dd($request);
            $validated = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email:dns|unique:users',
                'password' => 'required|min:6|max:255',
                'nohp' => 'required|min:10|max:13',
                'address' => 'required|min:10',
                'tanggallahir' => 'required',
                'role' => 'required'
            ]);

            $validated['password'] = Hash::make($validated['password']);
            User::create($validated);
            return redirect('/admin/login')->with('success', 'Registrasi Berhasil, plase login!');
        }else{
            return redirect('/register/admin')->with('Failure','Password Tidak Sama');
        }

    }
    public function forgetpw(){
        return view('');
    }
}

