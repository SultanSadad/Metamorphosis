<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\User;
use App\Models\Keranjang;
use App\Models\Pembayaran;

class PembayaranSeeder extends Seeder
{
    public function run()
    {
        // Pastikan data referensi ada
        $barang = Barang::firstOrCreate(
            ['id' => 1],
            ['nama_barang' => 'Barang Test', 'harga' => 100000]
        );

        $user = User::firstOrCreate(
            ['id' => 1],
            ['name' => 'User Test', 'email' => 'user@example.com', 'password' => bcrypt('password')]
        );

        $keranjang = Keranjang::firstOrCreate(
            ['id' => 1],
            ['id_barang' => $barang->id, 'id_user' => $user->id, 'total_harga' => 100000]
        );

        // Tambahkan data pembayaran
        Pembayaran::create([
            'id_barang' => $barang->id,
            'id_user' => $user->id,
            'id_keranjang' => $keranjang->id,
            'total_harga' => 100000,
            'tanggal' => now(),
            'status' => 'Pending',
            'metode' => 'COD',
            'nama_penerima' => 'Test',
            'nohp_penerima' => '1234567890',
            'email_penerima' => 'test@example.com',
            'alamat_penerima' => 'Alamat Test',
            'bukti_pembayaran' => null,
        ]);
    }
}
