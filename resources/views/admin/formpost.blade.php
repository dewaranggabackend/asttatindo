@extends('layout.master')

@section('judul')
Tambah Artikel
@endsection

@section('mainjudul')
Membuat Artikel Baru
@endsection

@section('subjudul')
Berikut adalah data yang diperlukan untuk membuat sebuah artikel baru
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
<a href="/artikel" type="button" class="btn btn-outline-dark"><i class="fa fa-arrow-left"></i></a>
<a href="/artikel/tambah" class="btn btn-outline-secondary"><i class="fa fa-redo-alt"></i></a>
<br>
<hr>

<form action="/artikel/tambah" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
        <label class="form-label">Judul</label>
        <input name="judul" type="text" class="form-control" aria-describedby="emailHelp" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Sub-Judul</label>
        <input name="subjudul" type="text" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Thumbnail</label>
        <input name="gambar" type="file" class="form-control" required>
    </div>
    <div class="mb-3">
    <label class="form-label">Kategori</label>
    <select class="form-select" name="kategorid" required>
        <?php foreach ($kategori as $kat) : ?>
        <option value="{{$kat->id}}">{{$kat->nama}}</option>
        <?php endforeach; ?>
    </select>
    <div id="kategoriHelper" class="form-text">
           *Jika kosong, harap buat kategori <a href="/tambahkategori">disini</a>.
    </div>
        </div>
    <div class="mb-3">
        <textarea name="konten" class="form-control" id="editor1" rows="15"></textarea>
    </div>

  <button type="submit" class="btn btn-outline-success">Tambah</button>
</form>
        </div>
        </div>
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>

@endsection
