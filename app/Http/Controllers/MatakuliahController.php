<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah; // Pastikan ini ada
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Menampilkan semua data mata kuliah.
     */
    public function index()
{
    // 1. Ambil semua data dari model Matakuliah (dari tabel matakuliahs)
    $matakuliahs = Matakuliah::all();

    // 2. Kirim data tersebut ke view
    return view('matakuliah.index', compact('matakuliahs'));
}
    /**
     * Menampilkan form untuk membuat mata kuliah baru.
     */
    public function create()
    {
        return view('matakuliah.create');
    }

    /**
     * Menyimpan mata kuliah baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama_matakuliah' => 'required|string|max:255',
            'sks' => 'required|integer',
        ]);

        // Membuat data baru di tabel matakuliahs menggunakan data dari request
        Matakuliah::create($request->all());

        // Mengarahkan kembali ke halaman daftar dengan pesan sukses
        return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah berhasil ditambahkan!');
    }
    /**
 * Menampilkan form untuk mengedit data.
 */
public function edit(Matakuliah $matakuliah)
{
    return view('matakuliah.edit', compact('matakuliah'));
}

/**
 * Memperbarui data di database.
 */
public function update(Request $request, Matakuliah $matakuliah)
{
    // Validasi data input
    $request->validate([
        'nama_matakuliah' => 'required|string|max:255',
        'sks' => 'required|integer',
    ]);

    // Update data matakuliah yang ada
    $matakuliah->update($request->all());

    // Arahkan kembali ke halaman daftar dengan pesan sukses
    return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah berhasil diupdate!');
}
/**
 * Menghapus data dari database.
 */
public function destroy(Matakuliah $matakuliah)
{
    // Hapus data matakuliah yang dipilih
    $matakuliah->delete();

    // Arahkan kembali ke halaman daftar dengan pesan sukses
    return redirect()->route('matakuliah.index')->with('success', 'Mata kuliah berhasil dihapus!');
}
}