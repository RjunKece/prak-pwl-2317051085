<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Pastikan ini ada

class PageController extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }

    public function tampil()
    {
        return "Ini adalah halaman Tampil";
    }

    public function kelas()
    {
        $kelas = [
            'Kelas A',
            'Kelas B',
            'Kelas C',
            'Kelas D'
        ];
        return view('kelas', compact('kelas'));
    }

    public function user()
    {
        $users = [
            [
                'nama' => 'Budi',
                'npm' => '2117051001',
                'kelas' => 'A'
            ],
            [
                'nama' => 'Siti',
                'npm' => '2117051002',
                'kelas' => 'B'
            ],
            [
                'nama' => 'Joko',
                'npm' => '2117051003',
                'kelas' => 'A'
            ]
        ];
        // Pastikan ini menunjuk ke 'user.user' karena file sudah dipindah
        return view('user.user', compact('users'));
    }

    // ↓↓↓ INI KODE BARU YANG DITAMBAHKAN ↓↓↓

    /**
     * Menampilkan halaman form untuk menambah user baru.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Menyimpan data user baru dari form.
     */
    public function store(Request $request)
    {
        // dd() adalah fungsi untuk debugging, menampilkan data lalu berhenti
        dd($request->all());
    }
}