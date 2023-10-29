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
        Schema::create('users', function (Blueprint $table) {
            $table->string('noktp')->primary()->onDelete('cascade');
            $table->string('nama');
            $table->string('password');
            $table->boolean('jenis_kelamin'); // 0 = perempuan; 1 = pria
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('kota');
            $table->string('email')->unique()->onDelete('cascade');
            $table->string('pendidikan');
            $table->string('no_telp');
            $table->text('foto');
            $table->date('tgl_daftar');
            $table->text('file_ktp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
