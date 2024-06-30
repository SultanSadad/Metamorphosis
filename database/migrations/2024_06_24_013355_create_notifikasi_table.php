<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifikasiTable extends Migration
{
    public function up()
    {
        Schema::create('notifikasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pembeli');
            $table->unsignedBigInteger('id_pembayaran');
            $table->dateTime('tanggal_pembayaran');
            $table->decimal('total_harga', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifikasi');
    }
}
