<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    protected $table = 'keranjang';
    protected $fillable = ['id_barang', 'id_user', 'total_harga'];

    // Relasi ke model Barang
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Relasi ke model Pembayaran
    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id_keranjang');
    }
}
