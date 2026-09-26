@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-3">
    <div class="col-lg-7">
        <div class="card-ui p-5">
            <div class="d-flex align-items-center gap-3 mb-4 pb-3 border-bottom">
                <div class="bg-light d-flex justify-content-center align-items-center rounded-circle" style="width: 50px; height: 50px;">
                    <i class="bi bi-person-plus-fill fs-4" style="color: #4318ff;"></i>
                </div>
                <div>
                    <h4 class="fw-bold mb-1" style="color: #2b3674;">Register User</h4>
                    <p class="text-muted mb-0" style="font-size: 0.9rem;">Masukkan data profil mahasiswa dengan lengkap.</p>
                </div>
            </div>

            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                
                <div class="mb-4">
                    <label for="nama" class="form-label fw-semibold" style="color: #2b3674; font-size: 0.9rem;">Nama Lengkap</label>
                    <input type="text" class="form-control form-control-custom" id="nama" name="nama" placeholder="Cth: Jhon Doe" required>
                </div>

                <div class="mb-4">
                    <label for="npm" class="form-label fw-semibold" style="color: #2b3674; font-size: 0.9rem;">Nomor Pokok Mahasiswa</label>
                    <input type="number" class="form-control form-control-custom" id="npm" name="npm" placeholder="Masukkan 10 digit NPM" required>
                </div>

                <div class="mb-5">
                    <label for="kelas_id" class="form-label fw-semibold" style="color: #2b3674; font-size: 0.9rem;">Penempatan Kelas</label>
                    <select class="form-select form-control-custom" name="kelas_id" id="kelas_id" required>
                        <option value="" selected disabled>Pilih kelas...</option>
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">Kelas {{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex gap-3">
                    <a href="/user" class="btn btn-light px-4 py-3 fw-semibold flex-grow-1" style="border-radius: 12px;">Batal</a>
                    <button type="submit" class="btn btn-brand px-4 py-3 flex-grow-1 border-0">
                        <i class="bi bi-check-circle me-2"></i>Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection