@extends('layout.master')

@section('judul')
Artikel
@endsection

@section('mainjudul')
Artikel
@endsection

@section('subjudul')
Menampilkan seluruh artikel
@endsection

@section('body')

<?php if(Session::has('sukses')) : ?>

<div class="alert alert-success" role="alert">
    {{Session('sukses')}}
</div>
<?php endif; ?>

<?php if(Session::has('error')) : ?>

<div class="alert alert-danger" role="alert">
    {{Session('error')}}
</div>
<?php endif; ?>


<div class="card mb-4">
<div class="card-body">
<a href="/dashboard" class="btn btn-outline-primary"><i class="fa fa-columns"></i></a>
<a href="/artikel/tambah" class="btn btn-outline-success"><i class="fa fa-plus"></i></a>
<a href="/artikel" class="btn btn-outline-secondary"><i class="fa fa-redo-alt"></i></a>

<br>
<hr>
<table class="table table-striped">
            <tr>
                <th>No.</th>
                <th>Thumbnail</th>
                <th>Judul Post</th>
                <th>Kategori</th>
                <th>Dibuat oleh</th>
                <th>Aksi</th>
            </tr>

<?php 
    $count = 0;
   foreach ($artikel as $posting => $post) :
?>

            <tr>
                <td><?= $count = $count + 1; ?></td>
                <td><img src="{{$post->gambar}}" width=100px height=100px></td>
                <td>{{$post->judul}}</td>
                <td><?php if(isset($post->kategori) == true) { echo $post->kategori['nama']; } else { echo "Kategori dihapus"; }
                ?></td>
                <td><?php if(isset($post->users->name) == true) { echo $post->users->name; } else { echo "Pengguna dihapus"; } ?></td>
                <td><a href="/{{$post->slug}}" type="button" class="btn btn-outline-info">Lihat</a>
                    <a href="/artikel/{{$post->id}}/edit" type="button" class="btn btn-outline-warning">Edit</a>
                    <a href="/artikel/{{$post->id}}/hapus" type="button" class="btn btn-outline-danger">Hapus</a>
   </td>
            </tr>

<?php 
    endforeach;
?>

</table>
</div>
</div>
@endsection