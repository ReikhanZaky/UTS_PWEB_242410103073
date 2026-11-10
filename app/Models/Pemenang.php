<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemenang extends Model
{
    use HasFactory;

    protected $fillable = [
        'username', 'password', 'nama', 'kota', 'hadiah',
        'usia', 'alamat', 'telepon', 'email', 'kode_pos'
    ];
}
