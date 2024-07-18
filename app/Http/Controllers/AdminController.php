<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function admin(){
        return view('admin');
    }

    function guru(){
        return view('guru.guru');
    }

    function siswa(){
        return view('siswa');
    }
}
