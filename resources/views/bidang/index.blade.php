@extends('layouts.app')
@section('title', 'Bidang Keahlian')
@section('content-header')
Bidang Keahlian
@endsection

@section('content')

<div class="col-md-2 mb-2">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formtambah">Tambah Data</button>
</div>
<div class="card">
    <div class="table-responsive text-nowrap m-2">
        <table class="table" id="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Bidang Keahlian</th>
                    <th>Bidang Keahlian</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            @foreach($bidang_keahlian as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->kode_bidang_keahlian}}</td>
                <td>{{$item->bidang_keahlian}}</td>
                <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#formedit{{$item->id}}">Edit</button>
                    <a href="/{{ auth()->user()->role }}/bidang-keahlian/{{$item->id}}/delete" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('bidang.form')
@include('bidang.edit')
@endsection