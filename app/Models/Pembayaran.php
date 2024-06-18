<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'pembayaran';

    // Nama primary key
    protected $primaryKey = 'id_pembayaran';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'id_barang', 'id_user', 'id_keranjang', 'total_harga', 'tanggal', 
        'status', 'metode', 'nama_penerima', 'nohp_penerima', 
        'email_penerima', 'alamat_penerima', 'bukti_pembayaran'
    ];

    // Relasi dengan model Barang
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Relasi dengan model Keranjang
    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class, 'id_keranjang');
    }
}
