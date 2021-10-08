@extends('visitor.blog')
<?php foreach ($data as $post2) : ?>
@section('title')
{{$post2->judul}}
@endsection
@section('gambar')
{{$post2->gambar}}
@endsection
@section('dibuatpada')
{{$post2->created_at}}
@endsection
@section('dibuatoleh')
<?php if(isset($post2->users->name)) {
    echo $post2->users->name;
} else {
    echo "Pengguna dihapus";
} ?>
@endsection
@section('kategori')
<?php if (isset($post2->kategori->nama)) {
    echo $post2->kategori->nama;
} else {
    echo "Kategori dihapus";
} ?>
@endsection
@section('judul')
{{$post2->judul}}
@endsection
@section('subjudul')
{{$post2->subjudul}}
@endsection
@section('konten')
{!! $post2->konten !!}
@endsection
<?php endforeach; ?>
<br>
<br>
