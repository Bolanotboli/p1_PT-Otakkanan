<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penawaran_harga extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'no_telp',
        'nama_perusahaan',
        'alamat',
        'website',
        'referensi_web',
        'layanan',
        'budget',
        'feedback',
        'deskripsi',
    ];
}
