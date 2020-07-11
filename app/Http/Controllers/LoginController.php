<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function daftarKaryawan(){
        return view('halaman', ['judul' => 'Daftar Karyawan']);
    }

    public function tableKaryawan(){
        return view('halaman', ['judul' => 'Tabel Karyawan']);
    }

    public function blogKaryawan(){
        return view('halaman', ['judul' => 'Blog Karyawan']);
    }

    public function login(){
        return view('form-login');
    }

    public function prosesLogin(Request $request){
        $request->validate([
            'username' => 'required'
        ]);

        $validUsername = ['andi','erik','rajif','rangga'];
        //jika inputan uername ada di array, buatkan session nya 'username'
        if(in_array($request->username, $validUsername)){
            session(['username' => $request->username]);
            return redirect('/daftar-karyawan');
        } else{
            // username tidak di daftarkan
            return back()->withInput()->with('pesan', "Username tidak valid");
        }
    }

    public function logout(){
        //hapus session 'username'
        session()->forget('username');
        return redirect('/login')->with('pesan', "Logout berhasil");
    }
}
