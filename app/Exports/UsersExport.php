<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // Filter users by role 'peserta' and select specific columns
        return User::whereHas('roles', function ($query) {
            $query->where('name', 'peserta');
        })->select('kode_pendaftaran', 'nama_peserta', 'nisn', 'no_hp', 'asal_sekolah')->get();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Kode Pendaftaran',
            'Nama Peserta',
            'NISN',
            'No HP',
            'Asal Sekolah',
        ];
    }
}
