@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Mata Kuliah</h1>
        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_matakuliah" class="form-label">Nama Mata Kuliah</label>
                <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah" required>
            </div>
            <div class="mb-3">
                <label for="sks" class="form-label">SKS</label>
                <input type="number" class="form-control" id="sks" name="sks" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection