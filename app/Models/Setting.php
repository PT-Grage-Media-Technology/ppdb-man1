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
        'link_grup_wa',
        'tgl_pendaftaran_mulai',
        'tgl_pendaftaran_selesai',
        'tgl_jadwal_tes_mulai',
        'tgl_jadwal_tes_selesai',
        'ttd_ketua_ppdb',
        'logo_sekolah',
        'nama_sekolah',
        'tgl_daftar_ulang_mulai',
        'tgl_daftar_ulang_selesai',
    ];
    public $timestamps = false;

}
