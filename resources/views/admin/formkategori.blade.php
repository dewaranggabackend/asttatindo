@extends('layout.master')

@section('judul')
Tambah Kategori
@endsection

@section('mainjudul')
Form Tambah Kategori
@endsection

@section('subjudul')
Berikut adalah data yang diperlukan untuk membuat sebuah kategori
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
<a href="/kategori" type="button" class="btn btn-outline-dark"><i class="fa fa-arrow-left"></i></a>
<br>
<hr>

<form action="tambahkategori" method="POST">
    {{csrf_field()}}
  <div class="mb-3">
    <label class="form-label">Nama Kategori</label>
    <input name="nama" type="text" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label class="form-label">Deskripsi</label>
    <input name="slug" type="text" class="form-control">
  </div>
  <button type="submit" class="btn btn-outline-success">Tambah</button>
</form>
</div>
</div>
@endsection
