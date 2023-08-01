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
        Schema::create('payrol_models', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->nullable();
            $table->string('nama_karyawan')->nullable();
            $table->string('hari_kerja')->nullable();
            $table->string('penempatan')->nullable();
            $table->string('upah_dasar')->nullable();
            $table->string('tunjangan_jabatan')->nullable();
            $table->string('kompensasi')->nullable();
            $table->string('lembur')->nullable();
            $table->string('bpjs_tk')->nullable();
            $table->string('bpjs_kes')->nullable();
            $table->string('kekurangan')->nullable();
            $table->string('jumlah_pendapatan')->nullable();
            $table->string('jam_terbuang')->nullable();
            $table->string('pot_absesnsi')->nullable();
            $table->string('pot_kasir')->nullable();
            $table->string('pot_kelebihan')->nullable();
            $table->string('pot_hari_kerja')->nullable();
            $table->string('potongan_hari_kerja')->nullable();
            $table->string('cuti_izin')->nullable();
            $table->string('pot_cuti_izin')->nullable();
            $table->string('pot_bpjs_kes')->nullable();
            $table->string('pot_bpjs_tk')->nullable();
            $table->string('jumlah_potongan')->nullable();
            $table->string('penerimaan')->nullable();
            $table->string('pembulatan')->nullable();
            $table->string('diterimakan')->nullable();
            $table->string('email')->nullable();
            $table->string('status')->nullable();
            $table->string('link_token')->nullable();
            $table->string('gaji_bulan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrol_models');
    }
};
