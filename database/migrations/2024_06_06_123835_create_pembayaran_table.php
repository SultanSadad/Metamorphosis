<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->unsignedBigInteger('id_barang');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_keranjang');
            $table->decimal('total_harga', 15, 2);
            $table->date('tanggal');
            $table->enum('status', ['Pending', 'Ditolak', 'Disetujui'])->default('Pending');
            $table->enum('metode', ['COD', 'Transfer']);
            $table->string('nama_penerima');
            $table->string('nohp_penerima');
            $table->string('email_penerima');
            $table->text('alamat_penerima');
            $table->string('bukti_pembayaran')->nullable();
            $table->timestamps();

            // Menambahkan foreign key constraints
            $table->foreign('id_barang')->references('id')->on('barangs')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_keranjang')->references('id')->on('keranjangs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
