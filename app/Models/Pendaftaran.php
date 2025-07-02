<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = [
        'user_id',
        'kategori',
        'status',
        'catatan_admin',
        'dikirim_pada',
        'dokumen'
    ];
}
