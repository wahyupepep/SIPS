<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;
    protected $table = "progress";
    protected $fillable =[
        'letter_id',
        'status',
        'keterangan'
    ];

    public $status = ['Pelajari','Klarifikasi','Mediasi','PB','Anjuran'];

    public function letter()
    {
        return $this->belongsTo(Letter::class);
    }
}
