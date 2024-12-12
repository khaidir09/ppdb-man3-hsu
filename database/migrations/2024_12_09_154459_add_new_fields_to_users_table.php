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
        Schema::table('users', function (Blueprint $table) {
            $table->string('nisn')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->string('nomor_wa')->nullable();
            $table->string('hobi')->nullable();
            $table->string('cita_cita')->nullable();
            $table->string('anak_ke')->nullable();
            $table->string('hubungan_dalam_keluarga')->nullable();
            $table->string('jumlah_saudara_kandung')->nullable();
            $table->text('alamat')->nullable();
            $table->string('nama_sekolah_asal')->nullable();
            $table->text('alamat_sekolah_asal')->nullable();
            $table->enum('role', [
                'Admin',
                'Siswa',
            ])->default('Siswa');
            $table->string('nama_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('penghasilan_ayah')->nullable();
            $table->string('nomor_hp_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('penghasilan_ibu')->nullable();
            $table->string('nomor_hp_ibu')->nullable();
            $table->string('pilihan_mendaftar')->nullable();
            $table->enum('status_pendaftaran', [
                'Belum Verifikasi',
                'Belum Lengkap',
                'Selesai',
                'Perlu Perbaikan',
                'Lulus',
                'Tidak Lulus',
            ])->default('Belum Verifikasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
