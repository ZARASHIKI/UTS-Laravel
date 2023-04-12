<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class Mahasiswacontrol extends Controller
{
    function index (){
        return view("home",["mahasiswas" => mahasiswa::all()]);
    }
    public function store(Request $request)
    {
        $tambah = new Mahasiswa;

        $tambah->nim = $request->nim;
        $tambah->nama = $request->nama;
        $tambah->alamat = $request->alamat;
        $tambah->save();
 
        return redirect('/')->with('success','Data Ditambahkan');
    }
    public function change(Request $request,$id)
    {
        $tambah = Mahasiswa::find($id);
 
        $tambah->nim = $request->nim;
        $tambah->nama = $request->nama;
        $tambah->alamat = $request->alamat;
        $tambah->save();
 
        return redirect('/')->with('success','Data Berhasil Di Update');
    }
    public function hapuse($id)
    {
        $hapus = Mahasiswa::find($id);
        $hapus->delete();
        return redirect('/')->with('success','Data Berhasil Dihapus');
    }
}
