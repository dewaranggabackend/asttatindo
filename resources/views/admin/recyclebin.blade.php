@extends('layout.master')

@section('judul')
Recycle Bin
@endsection

@section('mainjudul')
Recycle Bin
@endsection

@section('subjudul')
Berikut adalah data yang pernah dihapus
@endsection

@section('body')

<?php if(Session::has('sukses')) : ?>

<div class="alert alert-success" role="alert">
    {{Session('sukses')}}
</div>
<?php endif; ?>

<div class="card mb-4">
<div class="card-body">
<a href="/dashboard" class="btn btn-outline-primary"><i class="fa fa-columns"></i></a>
<a href="/artikel" type="button" class="btn btn-outline-dark"><i class="fa fa-book"></i></a>
<a href="/recyclebin" class="btn btn-outline-secondary"><i class="fa fa-redo-alt"></i></a>
<br>
<hr>

<table class="table table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>Judul Post</th>
        <th>Tanggal Dibuat</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($post as $postingan) : ?>
    <tr>
        <td>{{$postingan->id}}</td>
        <td>{{$postingan->judul}}</td>
        <td>{{$postingan->deleted_at}}</td>
        <td>
            <a href="/recyclebin/{{$postingan->id}}/restore" type="button" class="btn btn-outline-success">Restore</a>
            <a href="/recyclebin/{{$postingan->id}}/hapus" type="button" class="btn btn-outline-danger">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

    </div>
</div>

@endsection