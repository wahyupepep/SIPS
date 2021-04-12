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
        'tgl_terima',
        'asal',
        'seksi',
        'keterangan',
        'isi',
        'image',
        'user_id'
    ];

    //relasi user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //relasi progress
    public function progresses()
    {
        return $this->hasMany(Progress::class);
    }
    
}
