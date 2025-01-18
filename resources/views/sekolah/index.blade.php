@extends('layouts.app')
@section('title', 'Data Sekolah')
@section('content-header')
Data Sekolah
@endsection

@section('content')

<div class="col-md-2 mb-2">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formtambah">Tambah Data</button>
</div>
<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NPSN</th>
                    <th>NSS</th>
                    <th>Nama Sekolah</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th>Website</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach($sekolah as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->npsn}}</td>
                <td>{{$item->nss}}</td>
                <td>{{$item->nama_sekolah}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->no_telp}}</td>
                <td>{{$item->website}}</td>
                <td>{{$item->email}}</td>
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#formedit{{$item->id}}">Edit</button>
                    <a href="/{{auth()->user()->role}}/{{$item->id}}/sekolah/{{$item->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('sekolah.form') <!-- Include the add modal -->
@include('sekolah.edit') <!-- Include the edit modals -->
@endsection
