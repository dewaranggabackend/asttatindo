@extends('layout.master')

@section('judul')
IMG Res
@endsection

@section('mainjudul')
COMING SOON
@endsection

@section('subjudul')
Kustomisasi Resolusi Gambar
@endsection

@section('body')
<!-- 
<?php 
  if(count($errors)>0) :
      foreach ($errors->all() as $error) : ?>
      <div class="alert alert-danger" role="alert">
        {{$error}}
      </div>
<?php endforeach;
  endif; 
?>
<?php foreach ($gambar as $img) : ?>
    <label for="gambar">728x410</label>
    <img id="gambar" src="{{$img->gambar}}" width=728px height=410px>

<form action="/imgresizer/{{$img->id}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <br>
        <label class="form-label">Upload gambar yang ingin di resize</label>
        <input name="gambar" type="file" class="form-control" enctype="multipart/form-data" required>
    </div>
    <div class="row">
  <button type="submit" class="btn btn-outline-success">Tambah</button>
    </div>
</form>
<?php endforeach; ?> -->

@endsection
