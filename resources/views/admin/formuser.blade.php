@extends('layout.master')

@section('judul')
Tambah User
@endsection

@section('mainjudul')
Form Tambah User
@endsection

@section('subjudul')
Berikut adalah data yang diperlukan untuk membuat sebuah akun
@endsection

@section('body')

<?php 
  if(count($errors)>0) :
      foreach ($errors->all() as $error) : ?>
      <div class="alert alert-danger" role="alert">
        {{$error}}
      </div>
<?php endforeach;
  endif; 
?>

<div class="card mb-4">
<div class="card-body">
<a href="/users" type="button" class="btn btn-outline-dark"><i class="fa fa-arrow-left"></i></a>
<a href="/users/create" class="btn btn-outline-secondary"><i class="fa fa-redo-alt"></i></a>
<br>
<hr>

<form action="/users/create" method="POST">
    {{csrf_field()}}
  <div class="mb-3">
    <label class="form-label">Nama User</label>
    <input name="name" type="text" class="form-control" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label class="form-label">Email</label>
    <input name="email" type="email" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">Role</label>
    <select class="form-select" name="tipe" required>
        <option value="1">Administrator</option>
        <option value="0">Penulis</option>
    </select>
</div>

    <div class="mb-3">
    <label class="form-label">Password</label>
    <input name="password" type="password" class="form-control">
  </div>
  <button type="submit" class="btn btn-outline-success">Tambah</button>
</form>
</div>
</div>

@endsection
