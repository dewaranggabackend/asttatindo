@extends('layout.master')

@section('judul')
Kategori
@endsection

@section('body')

@section('mainjudul')
Kategori
@endsection

@section('subjudul')
Ini adalah halaman Kategori
@endsection

<?php if(Session::has('sukses')) : ?>

    <div class="alert alert-success" role="alert">
        {{Session('sukses')}}
    </div>
<?php endif; ?>

<div class="card mb-4">
<div class="card-body">
<a href="/dashboard" class="btn btn-outline-primary"><i class="fa fa-columns"></i></a>
<a href="/tambahkategori" class="btn btn-outline-success"><i class="fa fa-plus"></i></a>
<a href="/kategori" class="btn btn-outline-secondary"><i class="fa fa-redo-alt"></i></a>
<br>
<hr>
        <table class="table table-striped">
            <tr>
                <th>Nama Kategori</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>

<?php 
   foreach ($kategori as $kat => $hasil) :
?>

            <tr>
                <td>{{$hasil->nama}}</td>
                <td>{{$hasil->slug}}</td>
                <td><a href="kategori/{{$hasil->id}}/hapus" type="button" type="button" class="btn btn-outline-danger">Hapus</a>
            </td>
            </tr>

<?php 
    endforeach;
?>

</table>
</div>
</div>


@endsection