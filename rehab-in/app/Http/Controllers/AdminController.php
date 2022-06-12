<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Tip;
use App\Models\Admin;
use App\Models\User;
use App\Models\Kamar;
use App\Models\Kontak;
use App\Models\Notesehat;
use App\Models\histori;
use App\Models\OrderK;
use App\Models\Dokter;
use App\Models\OrderD;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $countdokter = DB::table('users')->where('role',2)->count();
        $total_pasien = DB::table('users')->where('role',0)->count();
        $orderd = DB::table('order_d_s')->where('status',"Belum membayar")->count();
        $orderk = DB::table('order_k_s')->where('status',"Belum membayar")->count();
        return view('admin.home', compact('countdokter', 'total_pasien','orderd','orderk'));
        

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

        return redirect()->route('artikeladm')->with('success','Artikel Berhasil Ditambahkan');
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


    public function riwayatadm(){
        $riwayat = histori::all();
        return view('admin.riwayatadm', compact('riwayat'));
        
    }

    public function deleteriwayat($id){
        $histori = histori::find($id);
        $histori->delete();
        return redirect(route('riwayatadm'));
    }

    public function order(){
        
        $order = OrderD::all();
        $dokter = Dokter::all();
      
        return view('admin.order',compact('order','dokter'));
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

    public function contactusadm(){
        
        $kontak = Kontak::all();
        return view('admin.contactusadm', compact('kontak'));

    }

    public function deleteMsg($id){
        $kontak = Kontak::find($id);
        $kontak->delete();
        return redirect(route('contactusadm'));
    }



    public function dbpasien(){
        $user = User::where('role',0)->get();
        return view('admin.dbpasien', compact('user'));
    }

    public function editpasien($id)
    {
        $pasien = User::where('role',0)->find($id);
        return view('admin.editpasien',['data'=>$pasien]);
    }

    public function updatepasien(Request $request){
        $password = $request->password;
        $pasien = User::where('role',0)->find($request->id);
        $pasien->name=$request->name;
        $pasien->email=$request->email;
        $pasien->username=$request->username;
        $pasien->nohp=$request->nohp;
        $pasien->address=$request->address;
        $pasien->tanggallahir=$request->tanggallahir;
        $pasien->password=Hash::make($password);
        $pasien->role=$request->role;

        $pasien->update();
        return redirect(route('dbpasien'));
    }

    public function regpasien(){
        return view('admin.regpasfromadm');
    }

    public function registpasien(Request $request){

        if($request->password == $request->confpw){
            // dd($request);
            $validated = $request->validate([
                'name' => 'required|max:255',
                'username' => 'required|min:5|unique:users',
                'email' => 'required|email:dns',
                'password' => 'required|min:6|max:255',
                'nohp' => 'required|min:10|max:13',
                'address' => 'required|min:10',
                'tanggallahir' => 'required',
                'role' => 'required'
            ]);

            $validated['password'] = Hash::make($validated['password']);
            User::create($validated);
            return redirect('/admin/dbpasien')->with('success', 'Registrasi Berhasil, please login!');
        }else{
            return redirect('/regis/pasien')->with('Failure','Password Tidak Sama');
        }

    }    
    

    public function registdokter(){
        return view('admin.dokter');
    }

    //tambah dokter
    public function adddokter(Request $request){
        $password = $request->password;
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->username=$request->username;
        $user->nohp=$request->nohp;
        $user->address=$request->address;
        $user->tanggallahir=$request->tanggallahir;
        $user->password=Hash::make($password);
        $user->role=$request->role;
    
        $user->save();

        return redirect(route('dbdokter'));
        // return view('admin.tips');
    }

    public function dbdokter(){
        $user = User::where('role',2)->get();
        return view('admin.dbdokter', compact('user'));
    }

    public function editdokter($id)
    {
        $dokter = User::where('role',2)->find($id);
        return view('admin.editdokter',['data'=>$dokter]);
    }

    public function updatedokter(Request $request){
        $password = $request->password;
        $dokter = User::where('role',2)->find($request->id);
        $dokter->name=$request->name;
        $dokter->email=$request->email;
        $dokter->username=$request->username;
        $dokter->nohp=$request->nohp;
        $dokter->address=$request->address;
        $dokter->tanggallahir=$request->tanggallahir;
        $dokter->password=Hash::make($password);
        $dokter->role=$request->role;

        $dokter->update();
        return redirect(route('dbdokter'));
    }


    public function dbadmin(){
        $admin = User::where('role',1)->get();
        return view('admin.dbadmin', compact('admin'));

    }

    public function editadmin($id)
    {
        $admin = User::where('role',1)->find($id);
        return view('admin.editadmin',['data'=>$admin]);
    }

    public function updateadmin(Request $request){
        $password = $request->password;
        $dokter = User::where('role',1)->find($request->id);
        $dokter->name=$request->name;
        $dokter->email=$request->email;
        $dokter->username=$request->username;
        $dokter->nohp=$request->nohp;
        $dokter->address=$request->address;
        $dokter->tanggallahir=$request->tanggallahir;
        $dokter->password=Hash::make($password);
        $dokter->role=$request->role;

        $dokter->update();
        return redirect(route('dbadmin'));
    }

    public function deladmin($id){
        $admin = User::where('role',1)->find($id);
        $admin->delete();
        return redirect(route('dbadmin'));
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
        $kamar->status = $request->status;
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
        
        $kamar->status = $request->status;
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
            'username' => 'required|exists:users',
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
            return redirect('/admin/login')->with('success', 'Registrasi Berhasil, plase login!');
        }else{
            return redirect('/register/admin')->with('Failure','Password Tidak Sama');
        }

    }

    public function regisadmfromadm(){
        return view('admin.regadmin');
    }

    public function registeradmfromadm(Request $request){

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
            return redirect('/admin/dbadmin')->with('success', 'Registrasi Berhasil, plase login!');
        }else{
            return redirect('/regis/admin')->with('Failure','Password Tidak Sama');
        }

    }

    public function forgetpw(){
        return view('');
    }
}

