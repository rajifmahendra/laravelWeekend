<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{

    public function daftarKaryawan(Request $request){
        if(Auth::check()){
            echo "Selamat Datang ".$request->user()->name;
        } else{
            echo "Silahkan login dahulu";
        }
    }

    public function tabelKaryawan(){
        return view('halaman', ['judul' => 'Tabel Karyawan']);
    }

    public function blogKaryawan(){
        return view('halaman', ['judul' =>'Blog Karyawan']);
    }

    public function produk(){
        $tampil = Produk::all();
        return view('home', compact('tampil'));
    }
}




// tugas team
// compro (company profile) 
// home (menjelaskan tentang perusahaan) http://fidiitkreatif.co.id
// produk
// contact
// rancang sediri dengan team untuk migrations nya
