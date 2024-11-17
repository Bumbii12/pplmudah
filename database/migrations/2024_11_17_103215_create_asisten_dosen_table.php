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
        Schema::create('asisten_dosen', function (Blueprint $table) {
            $table->string('id_asdos', 10)->primary();
            $table->string('username', 50);
            $table->string('password', 50);
            $table->string('npm', 10);
            $table->string('nama', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asisten_dosen');
    }
};
