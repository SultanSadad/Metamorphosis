<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\webController;
use App\Http\Controllers\adminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//   return view('welcome');
//  });

Route::get('/', [webController::class, 'index']);
Route::get('/Login', [webController::class, 'Login']);
Route::post('/Login', [webController::class, 'Autentikasi'])->name('login');
Route::get('/Register', [webController::class, 'Register']);
// customer
Route::prefix('guest')->group(function () {
    Route::get('/Register', [webController::class, 'Register']);
    Route::post('/create', [webController::class, 'create']);
    Route::get('/Profile', [webController::class, 'Profile']);
    Route::get('/AboutUs', [webController::class, 'AboutUs']);
    Route::get('/indexguest', [webController::class, 'indexguest']);
    Route::get('/status', [webController::class, 'status']);
    Route::get('/Notifikasi', [webController::class, 'Notifikasi']);
    Route::get('/Keranjang', [webController::class, 'showKeranjang'])->name('keranjang.show');
    Route::post('/keranjang', [webController::class, 'addToKeranjang'])->name('keranjang.add');
    Route::post('/pesan', [webController::class, 'pesan']);
    Route::post('/keranjang/hapus', [webController::class, 'hapusKeranjang'])->name('keranjang.hapus');
    Route::get('/DetailBarang/{id}', [webController::class, 'DetailBarang'])->name('DetailBarang');
    Route::get('/Bantuan', [webController::class, 'Bantuan']);
    Route::post('/pembayaran', [WebController::class, 'Pembayaran'])->name('pembayaran.store');// Mengganti route store untuk pembayaran
});

Route::prefix('admin')->group(function () {
    Route::get('/Dashboard', [AdminController::class, 'mainAdmin']);
    Route::get('/AdminKonfirmasi', [AdminController::class, 'AdminKonfirmasi']);
    Route::get('/Barang', [AdminController::class, 'Barang']);
    Route::get('/DataCustomer', [AdminController::class, 'DataCustomer']);
    Route::get('/DaftarBarang', [AdminController::class, 'DaftarBarang']);
    Route::get('/DaftarAdmin', [AdminController::class, 'DaftarAdmin']);
    Route::get('/Review', [AdminController::class, 'Review']);
    Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
    Route::post('/konfirmasi-pembayaran', [AdminController::class, 'konfirmasiPembayaran'])->name('admin.konfirmasiPembayaran');
    Route::post('/tolak-pembayaran', [AdminController::class, 'tolakPembayaran'])->name('admin.tolakPembayaran');
});

