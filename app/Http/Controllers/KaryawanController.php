<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use App\Telepon;

class KaryawanController extends Controller
{
    public function index(){
        $karyawans = Karyawan::all();
        return view('karyawan.index', compact('karyawans'));
    }

    public function show(Karyawan $karyawan){
        return view('karyawan.show', compact('karyawan'));
    }

    public function create(){
        return view('karyawan.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nik' => 'required|size:8|unique:karyawans',
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'bagian' => 'required',
            'alamat' => ''
        ]);
        $karyawan = Karyawan::create($validatedData);
        $telepon = new Telepon;
        $telepon->nomer_telepon = $request->input('nomer_telepon');
        $karyawan->telepon()->save($telepon);
        $request->session()->flash('pesan', "Data {$validatedData['nama']} Berhasil Disimpan");
        return redirect()->route('karyawans.index');
    }   

    public function edit(Karyawan $karyawan){
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, Karyawan $karyawan){
        $validatedData = $request->validate([
            'nik' => 'required|size:8',
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P,L',
            'bagian' => 'required',
            'alamat' => ''
        ]);
        $karyawan->update($validatedData);
        $telepon = $karyawan->telepon;
        $telepon->nomer_telepon = $request->input('nomer_telepon');
        $karyawan->telepon()->save($telepon);
        return redirect()->route('karyawans.show', compact('karyawan'))->with('pesan', "Update data {$validatedData['nama']} berhasil");
    }

    public function destroy(Karyawan $karyawan){
        $karyawan->delete();
        return redirect()->route('karyawans.index')->with('pesan', "Hapus data $karyawan->nama berhasil");
    }
}
