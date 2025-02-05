@extends('layouts.app')
@section('title', 'alumni')
@section('content-header')
Alumni
@endsection

@section('content')
<!-- <div class="col-md-2 mb-2">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formtambah">Tambah Data</button>
</div> -->
<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No. HP</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($alumni as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nisn}}</td>
                    <td>{{$item->nama_depan}} {{$item->nama_belakang}}</td>
                    <td>{{$item->jenis_kelamin}}</td>
                    <td>{{$item->no_hp}}</td>
                    <td>
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#view{{$item->id}}">Lihat Detail</button>
                        <!-- <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#formedit{{$item->id}}">Edit</button> -->
                        <a href="/{{auth()->user()->role}}/alumni/{{$item->id}}/delete" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>


                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('alumni.edit')
@include('alumni.form')
@include('alumni.view')
@endsection

