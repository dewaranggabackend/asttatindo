@extends('layout.master')

@section('judul')
Edit Asesor
@endsection

@section('mainjudul')
Edit Data Asesor
@endsection

@section('subjudul')
Berikut adalah data terkait asesor yang ingin dirubah
@endsection

@section('body')

<div class="card mb-4">
<div class="card-body">
<a href="/asesor" type="button" class="btn btn-outline-dark"><i class="fa fa-arrow-left"></i></a>
 <br>
 <hr>
<form action="/asesor/{{$asesor->id}}/edit" method="POST">
    {{csrf_field()}}
   
  <div class="mb-3">
    <label class="form-label">Nama Asesor</label>
    <input name="nama" type="text" class="form-control" value="{{$asesor->nama}}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">NIK</label>
    <input name="nik" type="number" class="form-control" value="{{$asesor->nik}}" required>
  </div>
  <label class="form-label" for="inputGroupSelect01">Tercatat di LPJK?</label>
  <div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect01" name="lpjk" value="{{$asesor->lpjk}}" required>
    <option value="1" selected>Ya</option>
    <option value="0">Tidak</option>
  </select>
</div>
<div class="mb-3">
    <label class="form-label">Sertifikat Asesor dari Lembaga yang mempunyai tugas melakukan Sertifikasi Kompetensi Kerja (BNSP)</label>
    <input name="sertifikat" type="text" class="form-control" value="{{$asesor->sertifikat}}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Sub-klasifikasi</label>
    <input name="sub_klasifikasi" type="text" class="form-control" value="{{$asesor->sub_klasifikasi}}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Kualifikasi</label>
    <input name="kualifikasi" type="text" class="form-control" value="{{$asesor->kualifikasi}}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Alamat</label>
    <input name="alamat" type="text" class="form-control" value="{{$asesor->alamat}}" required>
  </div>
<label class="form-label" for="inputGroupSelect01">Status</label>
  <div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect01" name="status" value="{{$asesor->status}}" required>
    <option value="TETAP" selected>Tetap</option>
    <option value="TIDAK TETAP">Tidak Tetap</option>
  </select>
</div>
  <button type="submit" class="btn btn-outline-success">Tambah</button>
    </div>
</div>
</form>

@endsection
