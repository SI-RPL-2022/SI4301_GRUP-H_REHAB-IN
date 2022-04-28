<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Tip;
use App\Models\Admin;
use App\Models\User;

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

        $gambar = time().'image'.'.'.$request->image_tips->extension();

        $request->image_tips->move(public_path('images'),$gambar);

        $tips = new Tip();
        $tips->judul_tips=$request->judul_tips;
        $tips->penulis=$request->penulis;
        $tips->image_tips=$gambar;
        $tips->konten=$request->konten;
    
        $tips->save();

        return redirect(route('tipskesadm'));
        // return view('admin.tips');
    }


    public function updateTips(Request $request){
        $tips = Tip::find($request->id);
        $tips->judul_tips=$request->judul_tips;
        $tips->penulis=$request->penulis;
        $gambar=$request->image_tips;
        if($gambar != null){
            $gambar = time().'image'.'.'.$request->image_tips->extension();
            $request->image_tips->move(public_path('images'),$gambar);
            $tips->image_tips=$gambar;
        }
        
        $tips->konten=$request->konten;

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
        return view('admin.notes');
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

    public function dbdokter(){
        return view('admin.dbdokter');
    }

    public function dbadmin(){
        return view('admin.dbadmin');
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
    
    public function adddokter(Request $request){

        $dokter = new User();
        $dokter->name=$request->nama_lengkap;
        $dokter->email=$request->email;
        $dokter->username=$request->username;
        $dokter->password=$request->password;
        $dokter->is_dokter=$request->is_dokter;
    
        $dokter->save();

        return redirect(route('dbdokter'));
        // return view('admin.tips');
    }

    public function kamar(){
        return view('admin.kamar');
    }

    public function loginadm(){
        return view('admin.login');
    }
    public function register(){
        return view('');
    }
    public function forgetpw(){
        return view('');
    }
}
