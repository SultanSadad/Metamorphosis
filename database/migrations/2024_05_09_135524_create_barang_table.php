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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('foto')->nullable();
            $table->string('nama')->nullable();
            $table->string('harga')->nullable();
            $table->string('status')->nullable();
            $table->string('ukuran')->nullable();
            $table->string('kondisi')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('merek')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
