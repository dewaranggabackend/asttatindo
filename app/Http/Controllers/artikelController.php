<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
Use Auth;

class artikelController extends Controller
{
    public function index () {
        $artikel = \App\Models\post::all();
        return view ('admin.post', ['artikel' => $artikel]);
    }

    public function tambah () {
        $kategori = \App\Models\kategori::all();
        return view ('admin.formpost', ['kategori' => $kategori]);
    }

    public function tambahdatabase (Request $request) {
        $this->validate($request, [
            'judul' => 'required',
            'subjudul' => 'required',
            'gambar' => 'required',
            'konten' => 'required'
        ]);

        if(strlen($request->judul) > 50) {
            return redirect ('artikel')->with('error','maaf, judul tidak boleh lebih dari 50 karakter');
        } else {

        }
        if (strlen($request->subjudul) > 255) {
            return redirect ('artikel')->with('error', 'maaf, subjudul tidak boleh lebih dari 255 karakter');
        } else {

        }

        $gambar = $request->gambar;
        $gambar_final = time().$gambar->getClientOriginalName();
        $post = \App\Models\post::create([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
            'gambar' => 'public/uploads/posts/'.$gambar_final,
            'kategorid' => $request->kategorid,
            'konten' => $request->konten,
            'slug' => Str::slug($request->judul),
            'user_id' => Auth::id(),
        ]);
        $gambar->move('public/uploads/posts/', $gambar_final);
        return redirect ('artikel')->with('sukses', 'artikel berhasil ditambahkan');
    }

    public function edit ($id) {
        $kategori = \App\Models\kategori::all();
        $post = \App\Models\post::find($id);
        return view ('admin.editpost', ['post' => $post, 'kategori' => $kategori]);
    }

    public function hapus ($id) {
        $artikel = \App\Models\post::find($id);
        $artikel->delete();
        return redirect ('artikel')->with('sukses', 'artikel berhasil dihapus');
    }

    public function editdatabase (Request $request, $id) {
        $data = \App\Models\post::find($id);
        if(strlen($request->judul) > 50) {
            return redirect ('artikel')->with('error','maaf, judul tidak boleh lebih dari 50 karakter');
        } else {

        }
        if (strlen($request->subjudul) > 255) {
            return redirect ('artikel')->with('error', 'maaf, subjudul tidak boleh lebih dari 255 karakter');
        } else {

        }
        $gambar = $request->gambar;
        $gambar_final = time().$gambar->getClientOriginalName();
        $data->update([
            'judul' => $request->judul,
            'subjudul' => $request->subjudul,
            'gambar' => 'public/uploads/posts/'.$gambar_final,
            'kategorid' => $request->kategorid,
            'konten' => $request->konten,
            'slug' => Str::slug($request->judul),
        ]);
        $gambar->move('public/uploads/posts/', $gambar_final);
        return redirect ('artikel')->with('sukses', 'artikel berhasil diperbarui');
    }

    public function destroy ($id) {
        $data = \App\Models\post::find($id);
        $data->delete();
        return redirect ('artikel')->with('sukses', 'data berhasil dihapus. silahkan cek Recycle Bin.');
    }

    public function recyclebin () {
        $post = \App\Models\post::onlyTrashed()->get();
        return view ('admin.recyclebin', ['post' => $post]);
    }

    public function restore ($id) {
        $post = \App\Models\post::withTrashed()->where('id', $id)->first();
        $post->restore();
        return redirect ('recyclebin')->with('sukses', 'artikel berhasil dipulihkan.');
    }

    public function hapuspermanen ($id) {
        $post = \App\Models\post::withTrashed()->where('id', $id)->first();
        $post->forceDelete();
        return redirect ('recyclebin')->with('sukses', 'artikel berhasil dihapus permanen.');
    }
}
