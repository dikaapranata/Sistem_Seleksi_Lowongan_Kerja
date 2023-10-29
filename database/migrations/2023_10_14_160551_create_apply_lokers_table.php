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
        Schema::create('apply_lokers', function (Blueprint $table) {
            $table->id('idapply');
            $table->string('user_noktp');
            $table->foreign('user_noktp')->references('noktp')->on('users')->onDelete('cascade');
            $table->string('loker_idloker');
            $table->foreign('loker_idloker')->references('idloker')->on('lokers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_lokers');
    }
};
