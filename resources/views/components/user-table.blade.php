<div class="card-ui p-4">
    <div class="table-responsive">
        <table class="table table-custom mb-0">
            <thead>
                <tr>
                    <th class="ps-4">User Profile</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th class="text-end pe-4">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td class="ps-4 py-3">
                        <div class="d-flex align-items-center gap-3">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($user->nama) }}&background=random&color=fff&rounded=true&bold=true" alt="Avatar" width="45" height="45" class="shadow-sm">
                            <div>
                                <div class="fw-bold" style="color: #2b3674; font-size: 1rem;">{{ $user->nama }}</div>
                                <div class="text-muted" style="font-size: 0.85rem;">ID: #{{ str_pad($user->id, 4, '0', STR_PAD_LEFT) }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="py-3">
                        <span class="text-secondary fw-medium"><i class="bi bi-credit-card-2-front me-2 text-muted"></i>{{ $user->nim }}</span>
                    </td>
                    <td class="py-3">
                        <span class="badge rounded-pill fw-semibold px-3 py-2" style="background-color: #e2e8f0; color: #4a5568;">
                            Kelas {{ $user->nama_kelas }}
                        </span>
                    </td>
                    <td class="py-3 text-end pe-4">
                        <button class="btn btn-light btn-sm rounded-circle shadow-sm" style="width: 35px; height: 35px;">
                            <i class="bi bi-three-dots text-secondary"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>