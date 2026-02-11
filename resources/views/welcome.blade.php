@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border text-center">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold text-primary mb-3">
                <i class="bi bi-shield-lock-fill"></i> Secure Ticketing
            </h1>
            <p class="col-md-8 fs-4 mx-auto text-muted">
                Sistem manajemen layanan tiket keamanan terpadu untuk SMK Wikrama Bogor.
                Laporkan dan pantau status tiket Anda dengan mudah dan efisien.
            </p>
            
            <div class="d-flex justify-content-center gap-3 mt-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/tickets') }}" class="btn btn-primary btn-lg px-4 gap-3">
                            <i class="bi bi-ticket-perforated"></i> Lihat Tiket Saya
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4 gap-3">
                            <i class="bi bi-box-arrow-in-right"></i> Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg px-4">
                                <i class="bi bi-person-plus"></i> Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>

    <div class="row align-items-md-stretch g-4">
        <div class="col-md-4">
            <div class="h-100 p-4 bg-white border rounded-3 shadow-sm text-center">
                <div class="text-primary mb-3">
                    <i class="bi bi-lightning-charge fs-1"></i>
                </div>
                <h2>Respon Cepat</h2>
                <p>Tim kami siap menangani laporan tiket keamanan dengan prioritas tinggi dan respon waktu yang cepat.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="h-100 p-4 bg-white border rounded-3 shadow-sm text-center">
                <div class="text-primary mb-3">
                    <i class="bi bi-search fs-1"></i>
                </div>
                <h2>Transparan</h2>
                <p>Pantau progress penanganan tiket Anda secara real-time melalui dashboard user yang interaktif.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="h-100 p-4 bg-white border rounded-3 shadow-sm text-center">
                <div class="text-primary mb-3">
                    <i class="bi bi-shield-check fs-1"></i>
                </div>
                <h2>Terpercaya</h2>
                <p>Sistem keamanan terintegrasi yang menjamin kerahasiaan dan integritas data pelaporan Anda.</p>
            </div>
        </div>
    </div>
@endsection
