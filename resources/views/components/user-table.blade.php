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

                            <img
                                src="https://ui-avatars.com/api/?name={{ urlencode($user->nama) }}&background=random&color=fff&rounded=true&bold=true"
                                alt="Avatar"
                                width="45"
                                height="45"
                                class="shadow-sm"
                            >

                            <div>
                                <div
                                    class="fw-bold"
                                    style="color: #2b3674; font-size: 1rem;"
                                >
                                    {{ $user->nama }}
                                </div>

                                <div
                                    class="text-muted"
                                    style="font-size: 0.85rem;"
                                >
                                    ID: {{ $user->id }}
                                </div>
                            </div>

                        </div>

                    </td>

                    <td class="py-3">

                        <span class="text-secondary fw-medium">
                            <i class="bi bi-credit-card-2-front me-2 text-muted"></i>
                            {{ $user->npm }}
                        </span>

                    </td>

                    <td class="py-3">

                        <span
                            class="badge rounded-pill fw-semibold px-3 py-2"
                            style="background-color: #e2e8f0; color: #4a5568;"
                        >
                            Kelas {{ $user->nama_kelas }}
                        </span>

                    </td>

                    <td class="py-3 text-end pe-4">

                        <div class="d-flex justify-content-end gap-2">

                            {{-- Tombol Edit --}}
                            <a
                                href="{{ route('user.edit', $user->id) }}"
                                class="btn btn-warning btn-sm"
                            >
                                <i class="bi bi-pencil-square me-1"></i>
                                Edit
                            </a>

                            {{-- Tombol Hapus --}}
                            <form
                                action="{{ route('user.destroy', $user->id) }}"
                                method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus data {{ $user->nama }}?')"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                >
                                    <i class="bi bi-trash me-1"></i>
                                    Hapus
                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>