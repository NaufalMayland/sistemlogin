<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function navbar(Request $request){
        return view('layout.navlayout',[
            'judul'=>'dashboard']);
    }
}
