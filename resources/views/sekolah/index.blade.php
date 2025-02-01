@extends('layouts.app')
@section('title', 'Data Sekolah')
@section('content-header')
Data Sekolah
@endsection

@section('content')
<style>
    /* Custom CSS untuk card yang profesional dan simpel */
    .card {
        border: none;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
        overflow: hidden;
    }

    .card:hover {
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
    }

    .card-header {
        background-color: #007bff; /* Warna biru */
        color: white;
        padding: 16px 20px;
        font-size: 1.1rem;
        font-weight: 600;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .card-body {
        padding: 17px 20px 20px 20px; /* Padding-top ditambah untuk memberi jarak */
        background-color: #ffffff;
    }

    .card-text {
        margin-bottom: 12px;
        font-size: 0.95rem;
        color: #444;
        line-height: 1.6;
    }

    .card-text strong {
        color: #333;
        font-weight: 500;
    }

    .card-footer {
        background-color: #f8f9fa;
        padding: 12px 20px;
        border-top: 1px solid #eee;
        text-align: right;
    }

    .btn-warning {
        background-color: #ffc107;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        font-size: 0.9rem;
        font-weight: 500;
        color: #333;
        transition: background-color 0.3s ease;
    }

    .btn-warning:hover {
        background-color: #e0a800;
    }

    /* Style untuk link website */
    .website-link {
        color: #007bff; /* Warna biru yang sama dengan header */
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .website-link:hover {
        color: #0056b3; /* Warna biru lebih gelap saat dihover */
        text-decoration: underline;
    }
</style>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">{{$sekolah->nama_sekolah}}</h5>
            </div>
            <div class="padding-top-25">
            <div class="card-body">
                    <div class="row ">
                        <div class="col-md-6">
                            <p class="card-text"><strong>NPSN:</strong> {{$sekolah->npsn}}</p>
                            <p class="card-text"><strong>NSS:</strong> {{$sekolah->nss}}</p>
                            <p class="card-text"><strong>Alamat:</strong> {{$sekolah->alamat}}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="card-text"><strong>No. Telepon:</strong> {{$sekolah->no_telp}}</p>
                            <p class="card-text">
                                <strong>Website:</strong>
                                <a href="{{$sekolah->website}}" class="website-link" target="_blank">{{$sekolah->website}}</a>
                            </p>
                            <p class="card-text"><strong>Email:</strong> {{$sekolah->email}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @if(auth()->user()->role == 'admin')
            <div class="card-footer">
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#formedit{{$sekolah->id}}">Edit</button>
            </div>
            @endif
        </div>
    </div>
</div>
@include('sekolah.form') <!-- Include the add modal -->
@include('sekolah.edit') <!-- Include the edit modals -->
@endsection
