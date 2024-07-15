<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormulirRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'kode_pendaftaran' => 'nullable|string|max:255',
            'kelas_program' => 'nullable|string|max:255',
            'nama_sekolah_asal' => 'nullable|string|max:255',
            'npsn_sekolah_asal' => 'nullable|string|max:255',
            'nama_lengkap' => 'nullable|string|max:255',
            'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan',
            'nik' => 'nullable|numeric',
            'nisn' => 'nullable|numeric',
            'tempat_lahir' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'alamat_jalan' => 'nullable|string|max:255',
            'rt' => 'nullable|string|max:255',
            'desa' => 'nullable|string|max:255',
            'kecamatan' => 'nullable|string|max:255',
            'kabupaten' => 'nullable|string|max:255',
            'provinsi' => 'nullable|string|max:255',
            'no_hp' => 'nullable|numeric',
            'status_ayah' => 'nullable|in:Hidup,Meninggal',
            'nik_ayah' => 'nullable|numeric',
            'nama_ayah' => 'nullable|string|max:255',
            'tanggal_lahir_ayah' => 'nullable|date',
            'pekerjaan_ayah' => 'nullable|in:PNS,TNI,Polri,Wiraswasta,Buruh(Tani/Pabrik/Bangunan),Lainnya',
            'pendidikan_ayah' => 'nullable|in:SD/Sederajat,SMP/Sederajat,SMA/Sederajat,D1,D2,D3,D4,S1,S2,S3,Lainnya',
            'penghasil_ayah' => 'nullable|in:1.000.000-2.000.000,2.000.000-3.000.000,>3.000.000,Lainnya',
            'no_hp_ayah' => 'nullable|numeric',
            'status_ibu' => 'nullable|in:Hidup,Meninggal',
            'nik_ibu' => 'nullable|numeric',
            'nama_ibu' => 'nullable|string|max:255',
            'tanggal_lahir_ibu' => 'nullable|date',
            'pekerjaan_ibu' => 'nullable|in:PNS,TNI,Polri,Wiraswasta,Buruh(Tani/Pabrik/Bangunan),Lainnya',
            'pendidikan_ibu' => 'nullable|in:SD/Sederajat,SMP/Sederajat,SMA/Sederajat,D1,D2,D3,D4,S1,S2,S3,Lainnya',
            'penghasil_ibu' => 'nullable|in:1.000.000-2.000.000,2.000.000-3.000.000,>3.000.000,Lainnya',
            'no_hp_ibu' => 'nullable|numeric',
        ];
    }
}
