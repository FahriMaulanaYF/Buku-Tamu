<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login()  {
        return view('Login');
        
    }

    function login_proses(Request $request) {
     $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    $data = [
        'username'  => $request->username,
        'password'  => $request->password
    ];

    if(Auth::attempt($data)) {
        return redirect('Tamu');
        Return redirect()->route('tamu.tampil')->with('berhasilmasuk','username atau pssword salah');
    }else{
        Return redirect()->route('Login')->with('failed','username atau pssword salah');
    } 
        
    }

    public function logout() {
        Auth::logout ();
        return redirect()->route('Login')->with('success','kamu berhasil logout');
    }
}

