<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class visitorController extends Controller
{
    public function index () {
        $carousel = \App\Models\carousel::all();
        $judul = \App\Models\judul::all();
        $visimisi = \App\Models\visimisi::all();
        $kebijakan = \App\Models\kebijakan::all();
        $galeri = \App\Models\galeri::all();
        $sasaran = \App\Models\sasaran::all();
        $galeri2 = \App\Models\galeri_informasi::all();
        $post = \App\Models\post::paginate(3);
        return view ('visitor.home', compact('carousel', 'judul', 'visimisi', 'kebijakan', 'galeri', 'sasaran', 'galeri2', 'post'));
    }

    public function tentang () {
        $post = \App\Models\post::paginate(5);
        return view ('visitor.blog', compact('post'));
    } 

    public function detailpost ($slug) {
        $data = \App\Models\post::where('slug', $slug)->get();
        $post = \App\Models\post::paginate(5);
        if (count($data) == 0) {
            $post = \App\Models\post::paginate(5);
            return view ('visitor.notfound', compact('post'));
        } 
        return view ('visitor.isipost', compact('data', 'post'));
    }

    public function struktur () {
        $post = \App\Models\post::paginate(5);
        return view ('visitor.struktur', compact('post'));
    }

    public function asesor () {
        $asesor = \App\Models\asesor::all();
        $post = \App\Models\post::paginate(5);
        return view ('visitor.asesor', compact('asesor', 'post'));
    }

    public function legalitas () {
        $post = \App\Models\post::paginate(5);
        return view ('visitor.legalitas', compact('post'));
    }

    public function prosesPermohonan () {
        $post = \App\Models\post::paginate(5);
        return view ('visitor.permohonan', compact('post'));
    }
}
