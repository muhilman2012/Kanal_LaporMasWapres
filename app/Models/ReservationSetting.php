<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationSetting extends Model
{
    use HasFactory;

    protected $fillable = ['tanggal', 'kuota_harian', 'tanggal_terblokir'];
}