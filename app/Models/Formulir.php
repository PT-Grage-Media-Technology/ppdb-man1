<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;

    protected $table = 'formulirs';
    public $timestamps = false;
    protected $fillable = [
        'kode_pendaftaran', 'kelas_program', 'nama_sekolah_asal', 'npsn_sekolah_asal', 'nama_lengkap', 'jenis_kelamin',
        'nik', 'nisn', 'tempat_lahir', 'tanggal_lahir', 'alamat_jalan', 'rt', 'desa', 'kecamatan', 'kabupaten', 'provinsi',
        'no_hp', 'status_ayah', 'nik_ayah', 'nama_ayah', 'tanggal_lahir_ayah', 'pekerjaan_ayah', 'pendidikan_ayah', 'penghasilan_ayah',
        'no_hp_ayah', 'status_ibu', 'nik_ibu', 'nama_ibu', 'tanggal_lahir_ibu', 'pekerjaan_ibu', 'pendidikan_ibu', 'penghasilan_ibu',
        'no_hp_ibu', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
// function untuk mengambil berapa persen kelengkapan data
    public function getCompletionPercentage()
    {
        $fields = $this->fillable;
        $filledFields = 0;

        foreach ($fields as $field) {
            if (!empty($this->{$field})) {
                $filledFields++;
            }
        }

        return round(($filledFields / count($fields)) * 100);
    }
}
