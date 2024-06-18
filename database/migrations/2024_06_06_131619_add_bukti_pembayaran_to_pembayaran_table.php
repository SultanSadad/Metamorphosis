<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBuktiPembayaranToPembayaranTable extends Migration
{
    /**
     * Jalankan migrasi.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->string('bukti_pembayaran')->nullable()->after('alamat_penerima');
        });
    }

    /**
     * Balikkan migrasi.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->dropColumn('bukti_pembayaran');
        });
    }
}
