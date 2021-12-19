<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalisirKeluar extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nis',
        'email',
        'date',
        'lampiran'
    ];
}
