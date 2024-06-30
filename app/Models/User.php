<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'alamat',
        'NoHP',
        'gender',    // tambahkan kolom gender
        'birthdate', // tambahkan kolom birthdate
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relasi ke model Keranjang
    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'id_user');
    }

    // Relasi ke model Pembayaran
    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id_user');
    }
}
