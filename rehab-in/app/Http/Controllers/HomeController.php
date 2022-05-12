<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Tip;

class HomeController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        $tips = Tip::all();
        // dd($artikel);
        return view('home', compact('artikel'), compact('tips'));        
    }

    public function tips()
    {
        return view('tips');
    }

    public function tipsid($id){
        $tips = Tip::find($id);
        return view('tips',['tips'=>$tips]);
    }

    public function articles()
    {
        return view('article');
    }

    public function articleid($id){
        $artikel = Artikel::find($id);
        return view('article',['article'=>$artikel]);
    }

}
