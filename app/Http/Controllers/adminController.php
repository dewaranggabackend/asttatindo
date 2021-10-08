<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index () {
        return view ('admin.dashboard');
    }

    public function asesor () {
        $asesor = \App\Models\asesor::all();
        return view ('admin.asesor', compact('asesor'));
    }

    public function editAsesor ($id) {
        $asesor = \App\Models\asesor::find($id);
        return view ('admin.editasesor', compact('asesor'));
    }

    public function formAddAsesor () {
        return view ('admin.addasesor');
    }

    public function addAsesor (Request $request) {
        $asesor = \App\Models\asesor::create($request->all());
        return redirect ('asesor')->with('sukses', 'data asesor berhasil ditambahkan');
    }

    public function hapusAsesor ($id) {
        $asesor = \App\Models\asesor::find($id);
        $asesor->delete();
        return redirect ('asesor')->with('sukses', 'data asesor berhasil dihapus');
    }

    public function editDataAsesor (Request $request, $id) {
        $asesor = \App\Models\asesor::find($id);
        $asesor->update([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'lpjk' => $request->lpjk,
            'sertifikat' => $request->sertifikat,
            'sub_klasifikasi' => $request->sub_klasifikasi,
            'kualifikasi' => $request->kualifikasi,
            'alamat' => $request->alamat

        ]);
        return redirect ('asesor')->with('sukses', 'data asesor berhasil diupdate');
    }
}
