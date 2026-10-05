@extends('layouts.app')

@section('content')

<div class="container">

    <div class="mb-4">
        <h3 class="fw-bold" style="color: #2b3674;">
            Edit Data Mahasiswa
        </h3>
        <p class="text-muted">
            Perbarui informasi mahasiswa yang sudah terdaftar.
        </p>
    </div>

    <div class="card-ui p-4">

        <form action="{{ route('user.update', $user->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Nama Mahasiswa
                </label>

                <input
                    type="text"
                    name="nama"
                    class="form-control"
                    value="{{ old('nama', $user->nama) }}"
                    required
                >
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">
                    NPM
                </label>

                <input
                    type="text"
                    name="npm"
                    class="form-control"
                    value="{{ old('npm', $user->npm) }}"
                    required
                >
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">
                    Kelas
                </label>

                <select
                    name="kelas_id"
                    class="form-select"
                    required
                >

                    @foreach ($kelas as $k)
                        <option
                            value="{{ $k->id }}"
                            {{ $user->kelas_id == $k->id ? 'selected' : '' }}
                        >
                            {{ $k->nama_kelas }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="d-flex gap-2">

                <a
                    href="{{ url('/user') }}"
                    class="btn btn-secondary"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    <i class="bi bi-save me-1"></i>
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

</div>

@endsection