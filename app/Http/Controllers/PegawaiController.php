<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;


class PegawaiController extends Controller
{
    public function index(){
        $pegawai = Pegawai::all();
        return view('pegawai.pegawai', compact(['pegawai'])); //menampilkan data
    }

    public function create(){
        return view('pegawai.create'); //menambahkan data
    }

    public function store(Request $request){
        // dd($request->all());
        Pegawai::create($request->all());
        return redirect('pegawai')->with('status','Data Berhasil Ditambahkan!'); //menambahkan data
    }

    public function edit($id){
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit',  compact(['pegawai'])); //merubah data
    }

    public function update($id, Request $request){
        $pegawai = Pegawai::find($id);
        $pegawai->update($request->all());
        return redirect('pegawai')->with('status','Data Berhasil Diupdate!'); //merubah data
    }

    public function destroy($id){
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('pegawai')->with('status','Data Berhasil Dihapus!'); //menghapus
    }

}
