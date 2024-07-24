<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UsersExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    protected $status;

    public function __construct($status = null)
    {
        $this->status = $status;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // Filter users based on the status parameter
        $usersQuery = User::whereHas('roles', function ($query) {
            $query->where('name', 'peserta');
        })->with('formulirs');

        if ($this->status) {
            $usersQuery->whereHas('formulirs', function ($query) {
                $query->where('status', $this->status);
            });
        }

        $users = $usersQuery->get();

        // Map data User dan formulirs ke dalam array
        $mappedUsers = $users->map(function ($user) {
            $formulirs = $user->formulirs->first(); // Use `first()` instead of `[0]`
            return [
                'kode_pendaftaran' => $formulirs->kode_pendaftaran ?? '-',
                'kelas_program' => $formulirs->kelas_program ?? '-',
                'nama_sekolah_asal' => $formulirs->nama_sekolah_asal ?? '-',
                'npsn_sekolah_asal' => $formulirs->npsn_sekolah_asal ?? '-',
                'nama_lengkap' => $formulirs->nama_lengkap ?? '-',
                'jenis_kelamin' => $formulirs->jenis_kelamin ?? '-',
                'nik' => $formulirs->nik ?? '-',
                'nisn' => $formulirs->nisn ?? '-',
                'tempat_lahir' => $formulirs->tempat_lahir ?? '-',
                'tanggal_lahir' => $formulirs->tanggal_lahir ?? '-',
                'alamat_jalan' => $formulirs->alamat_jalan ?? '-',
                'rt' => $formulirs->rt ?? '-',
                'desa' => $formulirs->desa ?? '-',
                'kecamatan' => $formulirs->kecamatan ?? '-',
                'kabupaten' => $formulirs->kabupaten ?? '-',
                'provinsi' => $formulirs->provinsi ?? '-',
                'no_hp' => $formulirs->no_hp ?? '-',
                'status_ayah' => $formulirs->status_ayah ?? '-',
                'nik_ayah' => $formulirs->nik_ayah ?? '-',
                'nama_ayah' => $formulirs->nama_ayah ?? '-',
                'tanggal_lahir_ayah' => $formulirs->tanggal_lahir_ayah ?? '-',
                'pekerjaan_ayah' => $formulirs->pekerjaan_ayah ?? '-',
                'pendidikan_ayah' => $formulirs->pendidikan_ayah ?? '-',
                'penghasilan_ayah' => $formulirs->penghasilan_ayah ?? '-',
                'no_hp_ayah' => $formulirs->no_hp_ayah ?? '-',
                'status_ibu' => $formulirs->status_ibu ?? '-',
                'nik_ibu' => $formulirs->nik_ibu ?? '-',
                'nama_ibu' => $formulirs->nama_ibu ?? '-',
                'tanggal_lahir_ibu' => $formulirs->tanggal_lahir_ibu ?? '-',
                'pekerjaan_ibu' => $formulirs->pekerjaan_ibu ?? '-',
                'pendidikan_ibu' => $formulirs->pendidikan_ibu ?? '-',
                'penghasilan_ibu' => $formulirs->penghasilan_ibu ?? '-',
                'no_hp_ibu' => $formulirs->no_hp_ibu ?? '-',
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
        ];
    }
}
