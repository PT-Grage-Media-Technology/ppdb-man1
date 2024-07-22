<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UsersExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // Ambil data User yang memiliki peran 'peserta' dan data relasi Formulirs
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'peserta');
        })->with('formulirs')->get();


        // Map data User dan formulirs ke dalam array
        $mappedUsers = $users->map(function ($user) {
            $formulirs = $user->formulirs[0];
            // dd($formulirs);
            return [
                'kode_pendaftaran' => $formulirs ? $formulirs->kode_pendaftaran : '',
                'kelas_program' => $formulirs ? $formulirs->kelas_program : '',
                'nama_sekolah_asal' => $formulirs ? $formulirs->nama_sekolah_asal : '',
                'npsn_sekolah_asal' => $formulirs ? $formulirs->npsn_sekolah_asal : '',
                'nama_lengkap' => $formulirs ? $formulirs->nama_lengkap : '',
                'jenis_kelamin' => $formulirs ? $formulirs->jenis_kelamin : '',
                'nik' => $formulirs ? $formulirs->nik : '',
                'nisn' => $formulirs ? $formulirs->nisn : '',
                'tempat_lahir' => $formulirs ? $formulirs->tempat_lahir : '',
                'tanggal_lahir' => $formulirs ? $formulirs->tanggal_lahir : '',
                'alamat_jalan' => $formulirs ? $formulirs->alamat_jalan : '',
                'rt' => $formulirs ? $formulirs->rt : '',
                'desa' => $formulirs ? $formulirs->desa : '',
                'kecamatan' => $formulirs ? $formulirs->kecamatan : '',
                'kabupaten' => $formulirs ? $formulirs->kabupaten : '',
                'provinsi' => $formulirs ? $formulirs->provinsi : '',
                'no_hp' => $formulirs ? $formulirs->no_hp : '',
                'status_ayah' => $formulirs ? $formulirs->status_ayah : '',
                'nik_ayah' => $formulirs ? $formulirs->nik_ayah : '',
                'nama_ayah' => $formulirs ? $formulirs->nama_ayah : '',
                'tanggal_lahir_ayah' => $formulirs ? $formulirs->tanggal_lahir_ayah : '',
                'pekerjaan_ayah' => $formulirs ? $formulirs->pekerjaan_ayah : '',
                'pendidikan_ayah' => $formulirs ? $formulirs->pendidikan_ayah : '',
                'penghasilan_ayah' => $formulirs ? $formulirs->penghasilan_ayah : '',
                'no_hp_ayah' => $formulirs ? $formulirs->no_hp_ayah : '',
                'status_ibu' => $formulirs ? $formulirs->status_ibu : '',
                'nik_ibu' => $formulirs ? $formulirs->nik_ibu : '',
                'nama_ibu' => $formulirs ? $formulirs->nama_ibu : '',
                'tanggal_lahir_ibu' => $formulirs ? $formulirs->tanggal_lahir_ibu : '',
                'pekerjaan_ibu' => $formulirs ? $formulirs->pekerjaan_ibu : '',
                'pendidikan_ibu' => $formulirs ? $formulirs->pendidikan_ibu : '',
                'penghasilan_ibu' => $formulirs ? $formulirs->penghasilan_ibu : '',
                'no_hp_ibu' => $formulirs ? $formulirs->no_hp_ibu : '',
                'user_id' => $formulirs ? $formulirs->user_id : '',
                'foto' => $formulirs ? $formulirs->foto : '',
                'status' => $formulirs ? $formulirs->status : '',
            ];
        });

        // Kembalikan hasil mapping
        return $mappedUsers;
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Kode Pendaftaran',
            'Kelas Program',
            'Nama Sekolah Asal',
            'NPSN Sekolah Asal',
            'Nama Lengkap',
            'Jenis Kelamin',
            'NIK',
            'NISN',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Alamat Jalan',
            'RT',
            'Desa',
            'Kecamatan',
            'Kabupaten',
            'Provinsi',
            'No HP',
            'Status Ayah',
            'NIK Ayah',
            'Nama Ayah',
            'Tanggal Lahir Ayah',
            'Pekerjaan Ayah',
            'Pendidikan Ayah',
            'Penghasilan Ayah',
            'No HP Ayah',
            'Status Ibu',
            'NIK Ibu',
            'Nama Ibu',
            'Tanggal Lahir Ibu',
            'Pekerjaan Ibu',
            'Pendidikan Ibu',
            'Penghasilan Ibu',
            'No HP Ibu',
            'User ID',
            'Foto',
            'Status',
        ];
    }
}
