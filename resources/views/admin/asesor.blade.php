@extends('layout.master')

@section('judul')
Asesor
@endsection

@section('body')

@section('mainjudul')
Asesor
@endsection

@section('subjudul')
Lihat Daftar Asesor
@endsection

<?php if(Session::has('sukses')) : ?>

<div class="alert alert-success" role="alert">
    {{Session('sukses')}}
</div>
<?php endif; ?>

<div class="card mb-4">
<div class="card-body">
    <a href="/dashboard" class="btn btn-outline-primary"><i class="fa fa-columns"></i></a>
        <a href="/asesor/create" type="button" class="btn btn-outline-success"><i class="fa fa-plus"></i></a>
        <a href="/asesor" class="btn btn-outline-secondary"><i class="fa fa-redo-alt"></i></a>

<br>
<hr>

<table class="table table-striped table-hover">
    <tr>
        
        <th><center>No</center></th>
        <th><center>Nama Asesor</center></th>
        <th><center>NIK</center></th>
        <th><center>Asesor Tercatat di LPJK</center></th>
        <th><center>Sertifikat Asesor dari BNSP</center></th>
        <th><center>Sub-klasifikasi</center></th>
        <th><center>Kualifikasi</center></th>
        <th><center>Alamat</center></th>
        <th><center>Status</center></th>
        <th><center>Aksi</center></th>
      
    </tr>
    <?php   $count = 0; 
        foreach ($asesor as $acc) : 
        $count = $count + 1;
        ?>
    <tr>
        <td>{{$count}}</td>
        <td>{{$acc->nama}}</td>
        <td>{{$acc->nik}}</td>
        <td><center><?php switch ($acc->lpjk) {
            case true:
                echo "<i class='fa fa-check'></i>";
                break;

            case false:
                echo "<i class='fa fa-times'></i>";
                break;
        } ?></center>
        </td>
        <td>{{$acc->sertifikat}}</td>
        <td>{{$acc->sub_klasifikasi}}</td>
        <td>{{$acc->kualifikasi}}</td>
        <td>{{$acc->alamat}}</td>
        <td>{{$acc->status}}</td>
        <td>
        <a href="/asesor/{{$acc->id}}/edit" type="button" class="btn btn-outline-warning">Edit</a>
        <a href="/asesor/{{$acc->id}}/hapus" type="button" class="btn btn-outline-danger">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

    </div>
</div>

@endsection