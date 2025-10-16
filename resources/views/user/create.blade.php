@extends('layouts.app')

@section('content')
    <h1>Tambah User</h1>

    <form action="{{ url('/user/store') }}" method="POST">
        @csrf 

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" class="form-control" id="npm" name="npm">
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection