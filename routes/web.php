<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController; // Pastikan ini ada

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route dari praktikum sebelumnya, biarkan saja.
Route::get('/profile/{nama}/{npm}/{kelas}', [ProfileController::class, 'profile']);

// Route::get('/', function () {
//     return view('welcome');
// }); // <--- INI DIHAPUS ATAU DIKOMENTARI

// ↓↓↓ TAMBAHKAN DUA BARIS INI UNTUK PRAKTIKUM SEKARANG ↓↓↓
Route::get('/', [PageController::class, 'index']);
Route::get('/tampil', [PageController::class, 'tampil']);
Route::get('/kelas', [PageController::class, 'kelas']);

Route::get('/user/create', [PageController::class, 'create']);
Route::post('/user/store', [PageController::class, 'store']);

// Route ini sekarang harus menunjuk ke view yang sudah dipindah
Route::get('/user', [PageController::class, 'user']);