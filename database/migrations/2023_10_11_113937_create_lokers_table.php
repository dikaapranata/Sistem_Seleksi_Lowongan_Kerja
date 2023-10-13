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
        Schema::create('lokers', function (Blueprint $table) {
            $table->string('idloker')->primary();
            $table->string('idperusahaan');
            $table->string('nama');
            $table->string('tipe');
            $table->integer('usia_min');
            $table->integer('usia_max');
            $table->integer('gaji_min');
            $table->integer('gaji_max');
            $table->string('nama_cp');
            $table->string('email_cp');
            $table->string('no_telp_cp');
            $table->date('tgl_update');
            $table->date('tgl_aktif');
            $table->date('tgl_tutup')->nullable();
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lokers');
    }
};
