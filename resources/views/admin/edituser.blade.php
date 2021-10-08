@extends('layout.master')

@section('judul')
Edit Role
@endsection

@section('mainjudul')
Perbarui Role
@endsection

@section('subjudul')
Mohon perhatikan role yang dipilih
@endsection

@section('body')

<div class="card mb-4">
<div class="card-body">
<a href="/users" type="button" class="btn btn-outline-dark"><i class="fa fa-arrow-left"></i></a>
<br>
<hr>

<form action="/users/{{$user->id}}/edit" method="POST">
    {{csrf_field()}}
  <div class="mb-3">
    <label class="form-label">Nama User</label>
    <input name="name" type="text" class="form-control" value="{{$user->name}}" readonly>
  </div>

  <div class="mb-3">
    <label class="form-label">Role</label>
    <select class="form-select" name="tipe" required vallue="{{$user->role}}">
        <option value="1">Administrator</option>
        <option value="0">Penulis</option>
    </select>
</div>
  <button type="submit" class="btn btn-outline-success">Tambah</button>
</form>
</div>
</div>

@endsection