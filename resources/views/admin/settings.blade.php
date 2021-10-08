@extends('layout.master')

@section('judul')
Pengaturan
@endsection

@section('mainjudul')
Pengaturan
@endsection

@section('subjudul')
Kustom halaman anda
@endsection

@section('body')

<?php if(Session::has('sukses')) : ?>

<div class="alert alert-success" role="alert">
    {{Session('sukses')}}
</div>
<?php endif; ?>

<div class="card mb-4">
<div class="card-body">
        <a href="/dashboard" type="button" class="btn btn-outline-dark"><i class="fa fa-arrow-left"></i></a>
        <a href="#background" type="button" class="btn btn-dark">#background</a>
        <a href="#judul" type="button" class="btn btn-dark">#judul</a>
        <a href="#visimisi" type="button" class="btn btn-dark">#visi_misi</a>
        <a href="#kebijakanmutu" type="button" class="btn btn-dark">#kebijakan_mutu</a>
        <a href="#sertifikasi" type="button" class="btn btn-dark">#galeri_sertifikasi</a>
        <a href="#sasaranmutu" type="button" class="btn btn-dark">#sasaran_mutu</a>
        <a href="#tahunan" type="button" class="btn btn-dark">#galeri_tahunan</a>
</div>
</div>
<div class="card mb-4"  id="background">
<div class="card-body">
<h1>Edit Background</h1>
<hr>
<?php foreach ($carousel as $caro) : ?>
    <img src="{{$caro->gambar}}" width=200px height=200px>
<form action="/pengaturan/carousel/{{$caro->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
        <label class="form-label">Background {{$caro->id}}</label>
        <input name="gambar" type="file" class="form-control" required>
    </div>
    <div class="row">
        <div class="md-6">
  <button type="submit" class="btn btn-outline-success">Edit</button>
  </div>
    </div>
</form>
<?php endforeach; ?>
</div>
</div>

<div class="card mb-4" id="judul">
<div class="card-body">
<h1>Edit Judul</h1>
<hr>

<?php foreach ($judul as $judul2) : ?>
<form action="/pengaturan/judul/{{$judul2->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">

        <input name="judul" type="text" class="form-control" value="{{$judul2->judul}}">
        <input name="subjudul" type="text" class="form-control" value="{{$judul2->subjudul}}">
        <?php endforeach; ?>
    </div>
    
  <button type="submit" class="btn btn-outline-success">Edit</button>
 
</form>
</div>
</div>

<div class="card mb-4" id="visimisi">
<div class="card-body">
<h1>Visi & Misi</h1>
<hr>

<?php foreach ($visimisi as $misivisi) : ?>
<form action="/pengaturan/visimisi/{{$misivisi->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
        <?php endforeach; ?>
        <label class="form-label">Visi</label>
        <input name="visi" type="text" class="form-control" value="{{$misivisi->visi}}">
        <br>
        <label class="form-label">Misi</label>
        <input name="misi1" type="text" class="form-control" value="{{$misivisi->misi1}}">
        <input name="misi2" type="text" class="form-control" value="{{$misivisi->misi2}}">
        <input name="misi3" type="text" class="form-control" value="{{$misivisi->misi3}}">
    </div>
  <button type="submit" class="btn btn-outline-success">Edit</button>
</form>
</div>
</div>


<div class="card mb-4" id="kebijakanmutu">
<div class="card-body">
<h1>Edit Kebijakan Mutu</h1>
<hr>

<?php foreach ($kebijakan as $bijak) : ?>
<form action="/pengaturan/kebijakan/{{$bijak->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
        <input name="kebijakan1" type="text" class="form-control" value="{{$bijak->kebijakan1}}">
        <input name="kebijakan2" type="text" class="form-control" value="{{$bijak->kebijakan2}}">
        <?php endforeach; ?>
    </div>
  <button type="submit" class="btn btn-outline-success">Edit</button>

</form>
</div>
</div>


<div class="card mb-4" id="sertifikasi">
<div class="card-body">
<h1>Galeri Kegiatan Sertifikasi</h1>
<hr>
<div class="alert alert-warning" role="alert">
Pastikan gambar berukuran 728x410 pixel
</div>
<?php foreach ($galeri as $gambar) : ?>
<form action="/pengaturan/galeri1/{{$gambar->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
    <img src="{{$gambar->gambar1}}" width=200px height=200px>
    <br>
        <input name="gambar1" type="file" class="form-control" required>
    </div>
    <div class="row">
        <div class="md-6">
  <button type="submit" class="btn btn-outline-success">Edit</button>
  </div>
    </div>
</form>
<br>
<form action="/pengaturan/galeri2/{{$gambar->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
    <img src="{{$gambar->gambar2}}" width=200px height=200px>
        <input name="gambar2" type="file" class="form-control" required>
    </div>
    <div class="row">
        <div class="md-6">
  <button type="submit" class="btn btn-outline-success">Edit</button>
  </div>
    </div>
</form>
<br>
<form action="/pengaturan/galeri3/{{$gambar->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
    <img src="{{$gambar->gambar3}}" width=200px height=200px>
        <input name="gambar3" type="file" class="form-control" required>
    </div>
    <div class="row">
        <div class="md-6">
  <button type="submit" class="btn btn-outline-success">Edit</button>
  </div>
    </div>
</form>
<br>
<form action="/pengaturan/galeri4/{{$gambar->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
    <img src="{{$gambar->gambar4}}" width=200px height=200px>
        <input name="gambar4" type="file" class="form-control" required>
    </div>
    <div class="row">
        <div class="md-6">
  <button type="submit" class="btn btn-outline-success">Edit</button>
  </div>
    </div>
</form>
<br>
<form action="/pengaturan/galeri5/{{$gambar->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
    <img src="{{$gambar->gambar5}}" width=200px height=200px>
        <input name="gambar5" type="file" class="form-control" required>
    </div>
    <div class="row">
        <div class="md-6">
  <button type="submit" class="btn btn-outline-success">Edit</button>
  </div>
    </div>
</form>
<br>
<form action="/pengaturan/galeri6/{{$gambar->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
    <img src="{{$gambar->gambar6}}" width=200px height=200px>
        <input name="gambar6" type="file" class="form-control" required>
    </div>
    <div class="row">
        <div class="md-6">
  <button type="submit" class="btn btn-outline-success">Edit</button>
  </div>
    </div>
</form>
<br>
<form action="/pengaturan/galeri7/{{$gambar->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
    <img src="{{$gambar->gambar7}}" width=200px height=200px>
        <input name="gambar7" type="file" class="form-control" required>
    </div>
    <div class="row">
        <div class="md-6">
  <button type="submit" class="btn btn-outline-success">Edit</button>
  </div>
    </div>
</form>
<br>
<form action="/pengaturan/galeri8/{{$gambar->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
    <img src="{{$gambar->gambar8}}" width=200px height=200px>
        <input name="gambar8" type="file" class="form-control" required>
    </div>
  <button type="submit" class="btn btn-outline-success">Edit</button>
</form>
<?php endforeach; ?>
</div>
</div>


<div class="card mb-4" id="sasaranmutu">
<div class="card-body">
<h1>Edit Sasaran Mutu</h1>
<hr>

<?php foreach ($sasaran as $misi) : ?>
<form action="/pengaturan/sasaran/{{$misi->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
        <input name="sasaranmisi" type="text" class="form-control" value="{{$misi->sasaranmisi}}">
        <?php endforeach; ?>
    </div>

  <button type="submit" class="btn btn-outline-success">Edit</button>

</form>
</div>
</div>


<div class="card mb-4" id="tahunan">
<div class="card-body">
<h1>Galeri Kegiatan Tahunan</h1>
<hr>
<div class="alert alert-warning" role="alert">
Pastikan gambar berukuran 728x410 pixel
</div>
<?php foreach ($galeri2 as $gambar) : ?>
<form action="/pengaturan/galeri9/{{$gambar->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
    <img src="{{$gambar->gambar1}}" width=200px height=200px>
    <br>
        <input name="gambar1" type="file" class="form-control" required>
    </div>
    <div class="row">
        <div class="md-6">
  <button type="submit" class="btn btn-outline-success">Edit</button>
  </div>
    </div>
</form>
<br>
<form action="/pengaturan/galeri10/{{$gambar->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
    <img src="{{$gambar->gambar2}}" width=200px height=200px>
        <input name="gambar2" type="file" class="form-control" required>
    </div>
    <div class="row">
        <div class="md-6">
  <button type="submit" class="btn btn-outline-success">Edit</button>
  </div>
    </div>
</form>
<br>
<form action="/pengaturan/galeri11/{{$gambar->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
    <img src="{{$gambar->gambar3}}" width=200px height=200px>
        <input name="gambar3" type="file" class="form-control" required>
    </div>
    <div class="row">
        <div class="md-6">
  <button type="submit" class="btn btn-outline-success">Edit</button>
  </div>
    </div>
</form>
<br>
<form action="/pengaturan/galeri12/{{$gambar->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
    <img src="{{$gambar->gambar4}}" width=200px height=200px>
        <input name="gambar4" type="file" class="form-control" required>
    </div>
  <button type="submit" class="btn btn-outline-success">Edit</button>

</form>
<br>
<?php endforeach; ?>
</div>
</div>



@endsection