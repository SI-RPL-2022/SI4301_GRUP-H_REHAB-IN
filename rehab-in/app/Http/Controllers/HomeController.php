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


    // public function tips()
    // {
    //     return view('tips');
    // }

    // public function tips(){
      
        
    // }


}
