@extends('layout.master')

@section('judul')
Tambah Asesor
@endsection

@section('mainjudul')
Tambah Asesor
@endsection

@section('subjudul')
Berikut adalah data yang diperlukan untuk menambahkan data asesor baru
@endsection

@section('body')

<div class="card mb-4">
<div class="card-body">
<a href="/asesor" type="button" class="btn btn-outline-dark"><i class="fa fa-arrow-left"></i></a>
<a href="/asesor/create" type="button" class="btn btn-outline-secondary"><i class="fa fa-redo-alt"></i></a>
<hr>
<form action="/asesor/create" method="POST">
    {{csrf_field()}}
  <div class="mb-3">
    <label class="form-label">Nama Asesor</label>
    <input name="nama" type="text" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">NIK</label>
    <input name="nik" type="number" class="form-control" required>
  </div>
  <label class="form-label" for="inputGroupSelect01">Tercatat di LPJK?</label>
  <div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect01" name="lpjk" required>
    <option value="1" selected>Ya</option>
    <option value="0">Tidak</option>
  </select>
</div>
<div class="mb-3">
    <label class="form-label">Sertifikat Asesor dari Lembaga yang mempunyai tugas melakukan Sertifikasi Kompetensi Kerja (BNSP)</label>
    <input name="sertifikat" type="text" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Sub-klasifikasi</label>
    <input name="sub_klasifikasi" type="text" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Kualifikasi</label>
    <input name="kualifikasi" type="text" class="form-control" required>
  </div>
  <div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <textarea class="form-control" id="alamat" rows="3" name="alamat" required></textarea>
</div>
<label class="form-label" for="inputGroupSelect01">Status</label>
  <div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect01" name="status" required>
    <option value="TETAP" selected>Tetap</option>
    <option value="TIDAK TETAP">Tidak Tetap</option>
  </select>
</div>
  <button type="submit" class="btn btn-outline-success">Tambah</button>
</form>
</div>
</div>
@endsection
