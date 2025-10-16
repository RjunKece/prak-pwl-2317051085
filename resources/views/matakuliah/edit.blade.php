@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Mata Kuliah</h1>
        <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
            @csrf
            @method('PUT') {{-- <--- PENTING: Untuk update, gunakan method PUT --}}

            <div class="mb-3">
                <label for="nama_matakuliah" class="form-label">Nama Mata Kuliah</label>
                <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah" value="{{ $matakuliah->nama_matakuliah }}" required>
            </div>
            <div class="mb-3">
                <label for="sks" class="form-label">SKS</label>
                <input type="number" class="form-control" id="sks" name="sks" value="{{ $matakuliah->sks }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection