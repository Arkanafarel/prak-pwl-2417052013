@extends('layouts.app')

@section('content')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i>
        {{ session('success') }}

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
        ></button>
    </div>
@endif
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-1" style="color: #2b3674;">Team Members</h3>
            <p class="text-muted mb-0" style="font-size: 0.9rem;">Overview dari seluruh mahasiswa yang terdaftar di sistem.</p>
        </div>
        <div class="bg-white rounded-pill shadow-sm d-flex align-items-center px-3 py-2 border">
            <i class="bi bi-search text-muted me-2"></i>
            <input type="text" class="border-0 bg-transparent" placeholder="Search user..." style="outline: none; font-size: 0.9rem;">
        </div>
    </div>
    
    @include('components.user-table', ['users' => $users])
@endsection