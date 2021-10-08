<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class settingController extends Controller
{
    public function index () {
        $carousel = \App\Models\carousel::all();
        $judul = \App\Models\judul::all();
        $visimisi = \App\Models\visimisi::all();
        $kebijakan = \App\Models\kebijakan::all();
        $galeri = \App\Models\galeri::all();
        $sasaran = \App\Models\sasaran::all();
        $galeri2 = \App\Models\galeri_informasi::all();
        return view ('admin.settings', compact('carousel', 'judul', 'visimisi', 'kebijakan', 'galeri', 'sasaran', 'galeri2'));
    }

    public function carousel (Request $request, $id) {
        $carousel = \App\Models\carousel::find($id);
        $gambar = $request->gambar;
        $gambar_final = time().$gambar->getClientOriginalName();
        $carousel->update([
            'gambar' => 'public/uploads/carousel/'.$gambar_final,
        ]);
        $gambar->move('public/uploads/carousel/', $gambar_final);
        return redirect ('pengaturan')->with('sukses', 'gambar berhasil diperbarui');
    }

    public function judul (Request $request, $id) {
        $judul = \App\Models\judul::find($id);
        $judul->update([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul
        ]);
        return redirect ('pengaturan')->with('sukses', 'judul berhasil diperbarui');
    }

    public function visimisi (Request $request, $id) {
        $visimisi = \App\Models\visimisi::find($id);
        $visimisi->update([
            'visi' => $request->visi,
            'misi1' => $request->misi1,
            'misi2' => $request->misi2,
            'misi3' => $request->misi3
        ]);
        return redirect ('pengaturan')->with('sukses', 'visi-misi berhasil diperbarui');
    }

    public function kebijakan (Request $request, $id) {
        $kebijakan = \App\Models\kebijakan::find($id);
        $kebijakan->update([
            'kebijakan1' => $request->kebijakan1,
            'kebijakan2' => $request->kebijakan2
        ]);
        return redirect ('pengaturan')->with('sukses', 'kebijakan mutu berhasil diperbarui');
    }

    public function galeri1 (Request $request, $id) {
        $galeri = \App\Models\galeri::find($id);
        $gambar = $request->gambar1;
        $gambar_final = time().$gambar->getClientOriginalName();
        $galeri->update([
            'gambar1' => 'public/uploads/gambar/'.$gambar_final,
        ]);
        $gambar->move('public/uploads/gambar/', $gambar_final);
        return redirect ('pengaturan')->with('sukses', 'galeri berhasil diperbarui');
    }

    public function galeri2 (Request $request, $id) {
        $galeri = \App\Models\galeri::find($id);
        $gambar = $request->gambar2;
        $gambar_final = time().$gambar->getClientOriginalName();
        $galeri->update([
            'gambar2' => 'public/uploads/gambar/'.$gambar_final,
        ]);
        $gambar->move('public/uploads/gambar/', $gambar_final);
        return redirect ('pengaturan')->with('sukses', 'galeri berhasil diperbarui');
    }

    public function galeri3 (Request $request, $id) {
        $galeri = \App\Models\galeri::find($id);
        $gambar = $request->gambar3;
        $gambar_final = time().$gambar->getClientOriginalName();
        $galeri->update([
            'gambar3' => 'public/uploads/gambar/'.$gambar_final,
        ]);
        $gambar->move('public/uploads/gambar/', $gambar_final);
        return redirect ('pengaturan')->with('sukses', 'galeri berhasil diperbarui');
    }

    public function galeri4 (Request $request, $id) {
        $galeri = \App\Models\galeri::find($id);
        $gambar = $request->gambar4;
        $gambar_final = time().$gambar->getClientOriginalName();
        $galeri->update([
            'gambar4' => 'public/uploads/gambar/'.$gambar_final,
        ]);
        $gambar->move('public/uploads/gambar/', $gambar_final);
        return redirect ('pengaturan')->with('sukses', 'galeri berhasil diperbarui');
    }

    public function galeri5 (Request $request, $id) {
        $galeri = \App\Models\galeri::find($id);
        $gambar = $request->gambar5;
        $gambar_final = time().$gambar->getClientOriginalName();
        $galeri->update([
            'gambar5' => 'public/uploads/gambar/'.$gambar_final,
        ]);
        $gambar->move('public/uploads/gambar/', $gambar_final);
        return redirect ('pengaturan')->with('sukses', 'galeri berhasil diperbarui');
    }

    public function galeri6 (Request $request, $id) {
        $galeri = \App\Models\galeri::find($id);
        $gambar = $request->gambar6;
        $gambar_final = time().$gambar->getClientOriginalName();
        $galeri->update([
            'gambar6' => 'public/uploads/gambar/'.$gambar_final,
        ]);
        $gambar->move('public/uploads/gambar/', $gambar_final);
        return redirect ('pengaturan')->with('sukses', 'galeri berhasil diperbarui');
    }

    public function galeri7 (Request $request, $id) {
        $galeri = \App\Models\galeri::find($id);
        $gambar = $request->gambar7;
        $gambar_final = time().$gambar->getClientOriginalName();
        $galeri->update([
            'gambar7' => 'public/uploads/gambar/'.$gambar_final,
        ]);
        $gambar->move('public/uploads/gambar/', $gambar_final);
        return redirect ('pengaturan')->with('sukses', 'galeri berhasil diperbarui');
    }

    public function galeri8 (Request $request, $id) {
        $galeri = \App\Models\galeri::find($id);
        $gambar = $request->gambar8;
        $gambar_final = time().$gambar->getClientOriginalName();
        $galeri->update([
            'gambar8' => 'public/uploads/gambar/'.$gambar_final,
        ]);
        $gambar->move('public/uploads/gambar/', $gambar_final);
        return redirect ('pengaturan')->with('sukses', 'galeri berhasil diperbarui');
    }

    public function sasaran (Request $request, $id) {
        $sasaran = \App\Models\sasaran::find($id);
        $sasaran->update([
            'sasaranmisi' => $request->sasaranmisi
        ]);
        return redirect ('pengaturan')->with('sukses', 'sasaran mutu berhasil diperbarui');
    }

    public function galeri9 (Request $request, $id) {
        $galeri = \App\Models\galeri_informasi::find($id);
        $gambar = $request->gambar1;
        $gambar_final = time().$gambar->getClientOriginalName();
        $galeri->update([
            'gambar1' => 'public/uploads/gambar/'.$gambar_final,
        ]);
        $gambar->move('public/uploads/gambar/', $gambar_final);
        return redirect ('pengaturan')->with('sukses', 'galeri berhasil diperbarui');
    }

    public function galeri10 (Request $request, $id) {
        $galeri = \App\Models\galeri_informasi::find($id);
        $gambar = $request->gambar2;
        $gambar_final = time().$gambar->getClientOriginalName();
        $galeri->update([
            'gambar2' => 'public/uploads/gambar/'.$gambar_final,
        ]);
        $gambar->move('public/uploads/gambar/', $gambar_final);
        return redirect ('pengaturan')->with('sukses', 'galeri berhasil diperbarui');
    }

    public function galeri11 (Request $request, $id) {
        $galeri = \App\Models\galeri_informasi::find($id);
        $gambar = $request->gambar3;
        $gambar_final = time().$gambar->getClientOriginalName();
        $galeri->update([
            'gambar3' => 'public/uploads/gambar/'.$gambar_final,
        ]);
        $gambar->move('public/uploads/gambar/', $gambar_final);
        return redirect ('pengaturan')->with('sukses', 'galeri berhasil diperbarui');
    }

    public function galeri12 (Request $request, $id) {
        $galeri = \App\Models\galeri_informasi::find($id);
        $gambar = $request->gambar4;
        $gambar_final = time().$gambar->getClientOriginalName();
        $galeri->update([
            'gambar4' => 'public/uploads/gambar/'.$gambar_final,
        ]);
        $gambar->move('public/uploads/gambar/', $gambar_final);
        return redirect ('pengaturan')->with('sukses', 'galeri berhasil diperbarui');
    }

    public function imgres () {
        $gambar = \App\Models\imgres::all();
        return view ('admin.imgres', compact('gambar'));
    }

    public function imgresRes (Request $request, $id) {
        $gambar = \App\Models\imgres::find($id);
        $gambarEdit = $request->file('gambar');
        $gambar_final = time().$gambarEdit->getClientOriginalName();
        $gambar->update([
            'gambar' => 'public/uploads/gambar/'.$gambar_final,
        ]);
        $gambar->move('public/uploads/gambar/', $gambar_final);
        $gambares = \App\Models\imgres::all();
        return redirect ('imgresizer', ['gambar' => $gambares])->with('sukses', 'gambar berhasil diresize');
    }
}
