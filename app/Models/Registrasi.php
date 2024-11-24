<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'no_identitas',
        'no_hp',
        'email',
        'nama_pendamping',
        'tanggal_reservasi',
        'qr_encrypted',
    ];
}
