<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nomor_surat',
        'perihal',
        'tujuan',
        'lampiran',
        'date'
    ];
}
