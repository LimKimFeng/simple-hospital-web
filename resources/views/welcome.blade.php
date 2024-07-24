@extends('layout.app')

@section('title')
Halaman Utama
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4">Welcome to My App</h1>
            <p class="lead">Your one-stop solution for managing healthcare data.</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Pasien</h5>
                    <p class="card-text">Manage and view patient data.</p>
                    <a href="{{ route('pasiens.index') }}" class="btn btn-primary">Go to Pasien</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Dokter</h5>
                    <p class="card-text">Manage and view doctor data.</p>
                    <a href="{{ route('dokter.index') }}" class="btn btn-primary">Go to Dokter</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Kunjungan</h5>
                    <p class="card-text">Manage and view visit data.</p>
                    <a href="{{ route('kunjungan.index') }}" class="btn btn-primary">Go to Kunjungan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
