<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'setting';

    protected $fillable = [
        'is_pengumuman',
        'tgl_pengumuman',
        'tahun_ajaran',
    ];
    public $timestamps = false;

}
