<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_surat',
        'tgl_surat',
        'asal',
        'perselisihan',
        'isi',
        'image',
        'users_id'
    ];
}
