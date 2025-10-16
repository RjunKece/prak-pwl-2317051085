<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids; // 1. Tambahkan ini
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory, HasUuids; // 2. Tambahkan HasUuids di sini

    // 3. Tambahkan properti $fillable
    protected $fillable = [
        'nama_matakuliah',
        'sks',
    ];
}