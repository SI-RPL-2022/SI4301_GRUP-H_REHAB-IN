<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }
    
    public function artikel(){

        $artikel = Artikel::all();
        return view('admin.article');
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

    public function tipskes(){
        return view('admin.tips');
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

    public function kamar(){
        return view('admin.kamar');
    }

    public function login(){
        return view('');
    }
    public function register(){
        return view('');
    }
    public function forgetpw(){
        return view('');
    }
}
