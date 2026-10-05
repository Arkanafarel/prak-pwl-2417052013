@extends ('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Mata Kuliah</h1>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-3">Tambah Mata Kuliah</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mks as $mk)
                    <tr>
                        <td>{{ $mk->id }}</td>
                        <td>{{ $mk->nama_mk }}</td>
                        <td>{{ $mk->sks }}</td>
                        <td>
                            <a href="{{ route('matakuliah.edit', $mk->id) }}">Edit</a>
                            <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus mata kuliah ini?')">Hapus</button>
                            </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection