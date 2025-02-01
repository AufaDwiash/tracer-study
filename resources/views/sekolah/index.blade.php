@extends('layouts.app')
@section('title', 'Data Sekolah')
@section('content-header')
Data Sekolah
@endsection

@section('content')

<div class="row">
    
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{$sekolah->nama_sekolah}}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>NPSN:</strong> {{$sekolah->npsn}}</p>
                    <p class="card-text"><strong>NSS:</strong> {{$sekolah->nss}}</p>
                    <p class="card-text"><strong>Alamat:</strong> {{$sekolah->alamat}}</p>
                    <p class="card-text"><strong>No. Telepon:</strong> {{$sekolah->no_telp}}</p>
                    <p class="card-text"><strong>Website:</strong> {{$sekolah->website}}</p>
                    <p class="card-text"><strong>Email:</strong> {{$sekolah->email}}</p>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#formedit{{$sekolah->id}}">Edit</button>
                </div>
            </div>
        </div>
    
</div>

@include('sekolah.form') <!-- Include the add modal -->
@include('sekolah.edit') <!-- Include the edit modals -->
@endsection