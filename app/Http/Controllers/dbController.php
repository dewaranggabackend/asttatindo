<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dbController extends Controller
{
    public function index () {
        $artikel = \App\Models\post::all();
        $kategori = \App\Models\kategori::all();
        $user = \App\Models\User::all();
        return view ('admin.dashboard', compact('artikel', 'kategori', 'user'));
    }
}
