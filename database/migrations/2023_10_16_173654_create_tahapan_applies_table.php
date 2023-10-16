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
        Schema::create('tahapan_applies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idapply');
            $table->foreign('idapply')->references('idapply')->on('apply_lokers');
            $table->unsignedBigInteger('idtahapan');
            $table->foreign('idtahapan')->references('idtahapan')->on('tahapans');
            $table->boolean('nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tahapan_applies');
    }
};
