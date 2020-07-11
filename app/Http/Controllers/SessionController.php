<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index(){
        echo '<ul>';
            echo '<li><a href=/buat-session>Buat Session</a></li>';
            echo '<li><a href=/akses-session>Akses Session</a></li>';
            echo '<li><a href=/hapus-session>Hapus Session</a></li>';
            echo '<li><a href=/flash-session>Flash Session</a></li>';
        echo '</ul>';
    }

    public function buatSession(){
        session(['hakAkses' => 'admin', 'nama' => 'Rajif']);
        return "Session berhasil di buat";
    }

    public function aksesSession(Request $request){
        if(session()->has('hakAkses')){
            echo "Session 'Hak Akses' Terdeteksi : ". session('hakAkses');  
        }
    }

    public function hapusSession(Request $request){
        // meghapus 1 session menggunaka helper fuction
        session()->forget('hakAkses');

        // menghapus 1 session menggunakan request objek
        $request->session()->forget('hakAkses');

        // menghapus 1 session menggunakan facade Session
        Session::forget('hakAkses');
        echo "Session Hak Akses berhasil di hapus";
    }

    public function flashSession(Request $request){
        // cara 1
        session('hakAkses','admin');
        //cara 2
        $request->session()->flash('hakAkses','admin');
        //cara 3
        Session::flash('hakAkses','admin');
        echo "Flash session berhasil";
    }
}


// menggunakan function helper
// session(<session_name>,<session_value>)
/// menggunakan method request
// $request->session()->put(<session_name>,<session_value>)
// menggunakan method atau fingsi nya langsung
// Session::put(<sesssion_name>,<session_value>)