<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function index () {
        $kategori = kategori::all();
        return view ('admin.kategori', ['kategori' => $kategori]);
    }

    public function tambah (Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'slug' => 'required'
        ]);
        \App\Models\kategori::create($request->all());
        return redirect ('kategori')->with('sukses', 'kategori berhasil ditambahkan');
    }

    public function hapus ($id) {
        $kategori = \App\Models\kategori::find($id);
        $kategori->delete();
        return redirect ('kategori')->with('sukses', 'data berhasil dihapus');
    }
}
