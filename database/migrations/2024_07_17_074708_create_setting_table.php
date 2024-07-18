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
        Schema::create('setting', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_pengumuman')->default(false);
            $table->string('tahun_ajaran')->nullable();
            $table->date('tgl_pengumuman')->nullable();
            $table->string('jadwal_ppdb')->nullable();
            $table->date('tgl_pendaftaran_mulai')->nullable();
            $table->date('tgl_pendaftaran_selesai')->nullable();
            $table->date('tgl_daftar_ulang_mulai')->nullable();
            $table->date('tgl_daftar_ulang_selesai')->nullable();
            $table->string('ttd_ketua_ppdb')->nullable();
            $table->string('logo_sekolah')->nullable();
            $table->string('nama_sekolah')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting');
    }
};
