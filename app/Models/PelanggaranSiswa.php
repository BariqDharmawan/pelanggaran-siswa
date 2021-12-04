<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelanggaranSiswa extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'tanggal' => 'datetime:Y-m-d'
    ];
}
