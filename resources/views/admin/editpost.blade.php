@extends('layout.master')
@section('judul')
Edit Artikel
@endsection
@section('mainjudul')
Edit Artikel
@endsection
@section('subjudul')
Silahkan edit data artikel dibawah ini
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
    <a href="/artikel" type="button" class="btn btn-outline-dark"><i class="fa fa-arrow-left"></i>
    </a>
<br>
<hr>
<form action="/artikel/{{$post->id}}/edit" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="mb-3">
    <label class="form-label">Judul
    </label>
    <input name="judul" type="text" class="form-control" value="{{$post->judul}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Sub-Judul
    </label>
    <input name="subjudul" type="text" class="form-control" value="{{$post->subjudul}}">
  </div>
  <div class="mb-3">
    <label class="form-label">Thumbnail
    </label>
    <input name="gambar" type="file" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Kategori
    </label>
    <select class="form-select" name="kategorid" required>
      <?php foreach ($kategori as $kat) : ?>
      <option value="{{$kat->id}}">{{$kat->nama}}
      </option>
      <?php endforeach; ?>
    </select>
    <div id="kategoriHelper" class="form-text">
      *Jika kosong, harap buat kategori 
      <a href="/tambahkategori">disini
      </a>.
    </div>
  </div>
  <div class="mb-3">
    <textarea name="konten" class="form-control" id="editor1" rows="15">{{$post->konten}}
    </textarea>
  </div>
    <button type="submit" class="btn btn-outline-success">Tambah
    </button>
</form>
      </div>
      </div>
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js">
</script>
<script>
  CKEDITOR.replace('editor1');
</script>
@endsection
