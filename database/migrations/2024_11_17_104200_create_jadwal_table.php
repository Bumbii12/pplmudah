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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->string('id_jadwal', 10)->primary();
            $table->string('hari', 20);
            $table->time('waktu');
            $table->string('id_asdos', 10);
            $table->string('id_kelas', 10);
            $table->timestamps();
        
            $table->foreign('id_asdos')->references('id_asdos')->on('asisten_dosen')->onDelete('cascade');
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};
