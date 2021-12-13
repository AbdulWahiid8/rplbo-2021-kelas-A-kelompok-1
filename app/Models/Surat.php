<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nis',
        'email',
        'perihal',
        'nomor_surat',
        'nomor_telp',
        'date'
    ];

    protected $casts = [
        'konfirmasi_surat' => 'datetime',
    ];
}
