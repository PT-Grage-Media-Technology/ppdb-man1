<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            // registrasi peserta didik
            $table->string('kode_pendaftaran')->nullable();
            $table->string('kelas_program')->nullable();
            $table->string('nama_sekolah_asal')->nullable();
            $table->string('npsn_sekolah_asal')->nullable();
            // biodata peserta didik
            $table->string('nama_lengkap')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->bigInteger('nik')->nullable();
            $table->bigInteger('nisn')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            // alamat peserta didik
            $table->string('alamat_jalan')->nullable();
            $table->string('rt')->nullable();
            $table->string('desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('provinsi')->nullable();
            $table->bigInteger('no_hp')->nullable();
            // data orangtua ayah
            $table->enum('status_ayah', ['Hidup', 'Meninggal'])->nullable();
            $table->bigInteger('nik_ayah')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->date('tanggal_lahir_ayah')->nullable();
            $table->enum('pekerjaan_ayah', ['PNS', 'TNI', 'Polri', 'Wiraswasta', 'Buruh(Tani/Pabrik/Bangunan)','Lainnya'])->nullable();
            $table->enum('pendidikan_ayah', ['SD/Sederajat', 'SMP/Sederajat', 'SMA/Sederajat', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3','Lainnya'])->nullable();
            $table->enum('penghasil_ayah',['1.000.000-2.000.000','2.000.000-3.000.000','>3.000.000','Lainnya'])->nullable();
            $table->bigInteger('no_hp_ayah')->nullable();
            // data orangtua ibu
            $table->enum('status_ibu', ['Hidup', 'Meninggal'])->nullable();
            $table->bigInteger('nik_ibu')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->date('tanggal_lahir_ibu')->nullable();
            $table->enum('pekerjaan_ibu', ['PNS', 'TNI', 'Polri', 'Wiraswasta', 'Buruh(Tani/Pabrik/Bangunan)','Lainnya'])->nullable();
            $table->enum('pendidikan_ibu', ['SD/Sederajat', 'SMP/Sederajat', 'SMA/Sederajat', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3','Lainnya'])->nullable();
            $table->enum('penghasil_ibu',['1.000.000-2.000.000','2.000.000-3.000.000','>3.000.000','Lainnya'])->nullable();
            $table->bigInteger('no_hp_ibu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulirs');
    }
};
