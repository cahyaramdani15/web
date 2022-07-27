<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar_belanja;

class Daftar_belanjaController extends Controller
{
    public function index(){
        $daftar_belanja = Daftar_belanja::all();
        return view('daftar_belanja.daftar_belanja', compact(['daftar_belanja'])); //menampilkan data
    }

    public function create(){
        return view('daftar_belanja.create'); //menambahkan data
    }

    public function store(Request $request){
        // dd($request->all());
        Daftar_belanja::create($request->all());
        return redirect('daftar_belanja')->with('status','Data Berhasil Ditambahkan!'); //menambahkan data
    }

    public function edit($id){
        $daftar_belanja = Daftar_belanja::find($id);
        return view('daftar_belanja.edit',  compact(['daftar_belanja'])); //merubah data
    }

    public function update($id, Request $request){
        $daftar_belanja = Daftar_belanja::find($id);
        $daftar_belanja->update($request->all());
        return redirect('daftar_belanja')->with('status','Data Berhasil Diupdate!'); //merubah data
    }

    public function destroy($id){
        $daftar_belanja = Daftar_belanja::find($id);
        $daftar_belanja->delete();
        return redirect('daftar_belanja')->with('status','Data Berhasil Dihapus!'); //menghapus
    }

}
