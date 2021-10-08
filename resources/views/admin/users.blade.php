@extends('layout.master')

@section('judul')
Kelola User
@endsection

@section('mainjudul')
Kelola User
@endsection

@section('subjudul')
Halaman kelola users
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
        <a href="/users/create" type="button" class="btn btn-outline-success"><i class="fa fa-plus"></i></a>
        <a href="/users" class="btn btn-outline-secondary"><i class="fa fa-redo-alt"></i></a>
<br><hr>

<table class="table table-striped table-hover">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Role</th>
        <th>Dibuat Pada</th>
        <th>Aksi</th>
    </tr>
    <?php   $count = 0; 
    foreach ($user as $pengguna) : ?>
    <tr>
        <td><?= $count = $count + 1; ?></td>
        <td>{{$pengguna->name}}</td>
        <td>{{$pengguna->email}}</td>
        <td>
            <?php if ($pengguna->tipe) {
            echo "Administrator";
            } else {
                echo "Penulis";
            }
            ?>
        </td>
        <td>{{$pengguna->created_at}}</td>
        <td>
            <a href="/users/{{$pengguna->id}}/edit" type="button" class="btn btn-outline-info">Ubah Role</a>
            <a href="/users/{{$pengguna->id}}/hapus" type="button" class="btn btn-outline-danger">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

    </div>
</div>

@endsection