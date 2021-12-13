<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legalisir extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nis',
        'perihal',
        'email',
        'nomor_telp',
        'date'
    ];

    protected $casts = [
        'konfirmasi_leges' => 'datetime',
    ];
}
