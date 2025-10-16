@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Mata Kuliah</h1>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-3">Tambah Mata Kuliah</a>
        
        {{-- Menampilkan pesan sukses --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($matakuliahs as $matakuliah)
                    <tr>
                        <td>{{ $matakuliah->nama_matakuliah }}</td>
                        <td>{{ $matakuliah->sks }}</td>
                        <td>
                            {{-- VVV INI BAGIAN YANG DIUBAH VVV --}}
                            <form action="{{ route('matakuliah.destroy', $matakuliah->id) }}" method="POST" class="d-inline">
                                <a href="{{ route('matakuliah.edit', $matakuliah->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Belum ada data.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection