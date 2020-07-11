<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function tampil(){
        $karyawan = ['Aris', 'Habib', 'Erik', 'Lia', 'Imam'];
        return view('data.karyawan')->with('karyawan', $karyawan);
    }

    public function latihanFacade(){
        echo Str::snake('Sedang tes Laravel');
        echo "<br>";
        echo Str::kebab('Latihan Laravel');
    }
}
