<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiVisitorController extends Controller
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
        return response()->json(['status' => 'sukses', 'data' => $carousel, $judul, $visimisi, $kebijakan, $galeri, $sasaran, $galeri2, $post]);
    }

    public function detailpost ($slug) {
        $data = \App\Models\post::where('slug', $slug)->get();
        $post = \App\Models\post::paginate(5);
        if (count($data) == 0) {
            $post = \App\Models\post::paginate(5);
            return response()->json(['status' => 'failed', 'data' => null]);
        } 
        return response()->json(['status' => 'sukses', 'data' => $post, $data]);
    }
}
