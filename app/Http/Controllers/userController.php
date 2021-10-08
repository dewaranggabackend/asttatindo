<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index () {
        $user = \App\Models\User::all();
        return view ('admin.users', ['user' => $user]);
    }

    public function create () {
        return view ('admin.formuser');
    }

    public function createUser (Request $request) {
        $this->validate($request, [
            'name' => 'required|min:3|max:100',
            'email' => 'required|email',
            'tipe' => 'required',
            'password' => 'required',
        ]);
        \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'tipe' => $request->tipe,
            'password' => bcrypt($request->password),
        ]);
        return redirect ('users')->with('sukses', 'user berhasil dibuat.');
    }

    public function hapusUser ($id) {
        $user = \App\Models\User::find($id);
        $user->delete();
        return redirect ('users')->with('sukses', 'user berhasil dihapus');
    }

    public function editUser ($id) {
        $user = \App\Models\User::find($id);
        return view ('admin.edituser', ['user' => $user]);
    }

    public function editUserdb (Request $request, $id) {
        $user = \App\Models\User::find($id);
        $user->update([
            'tipe' => $request->tipe,
        ]);

        return redirect ('users')->with('sukses', 'role berhasil diperbarui');
    }
}
