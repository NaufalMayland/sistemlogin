<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view("login");
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],
        [
            'email.required'=>'Email wajib diisi!',
            'password.required'=>'Password wajib diisi!'
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if (Auth::attempt($infologin)) {
            if (Auth::user()->level == 'admin'){
                return redirect('/admin');
            }
            elseif (Auth::user()->level == 'guru'){
                return redirect('/guru');
            }
            elseif(Auth::user()->level == 'siswa'){
                return redirect('/siswa');
            }
        }else{
            return redirect('')->withErrors('Username dan Password tidak sesuai')->withInput();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('');
    }
}
