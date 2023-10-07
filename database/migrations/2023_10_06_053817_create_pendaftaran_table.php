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
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelatihan');
            $table->string('waktu_pelatihan');
            $table->string('biaya');
            $table->string('kouta_peserta');
            $table->string('nama_pelatih');
            $table->string('email')->unique();
            $table->string('no_pelatih');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
    }
};
