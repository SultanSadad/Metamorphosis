<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $guarded = [];

    // Relasi ke model Keranjang
    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'id_barang');
    }
}
