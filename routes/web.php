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
// customer
Route::prefix('guest')->group(function () {
    Route::get('/Login', [webController::class, 'Login']);
    Route::post('/Login', [webController::class, 'Autentikasi'])->name('login');
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
});

Route::prefix('admin')->group(function () {
    Route::get('/Dashboard', [adminController::class, 'mainAdmin']);
    Route::get('/AdminKonfirmasi', [adminController::class, 'AdminKonfirmasi']);
    Route::get('/Barang', [adminController::class, 'Barang']);
    Route::get('/DataCustomer', [adminController::class, 'DataCustomer']);
    Route::get('/DaftarBarang', [adminController::class, 'DaftarBarang']);
    Route::get('/DaftarAdmin', [adminController::class, 'DaftarAdmin']);
    Route::get('/Review', [adminController::class, 'Review']);
    Route::post('/store', [adminController::class, 'store']);
    Route::get('/{id}/edit', [adminController::class, 'edit']);
    Route::put('/{id}', [adminController::class, 'update']);
    Route::delete('/{id}', [adminController::class, 'destroy']);
});
