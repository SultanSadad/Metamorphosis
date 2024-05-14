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


 // customer
 Route::get('guest/Login', [webController::class, 'Login']);
 Route::get('guest/Register', [webController::class, 'Register']);
 Route::get('guest/Profile', [webController::class, 'Profile']);
 Route::get('guest/AboutUs', [webController::class, 'AboutUs']);
 Route::get('guest/index', [webController::class, 'index']);
Route::get('status', [webController::class, 'status']);
Route::get('Notifikasi', [webController::class, 'Notifikasi']);
Route::get('Keranjang', [webController::class, 'Keranjang']);
Route::get('guest/DetailBarang', [webController::class, 'DetailBarang']);
Route::get('Konfirmasi', [webController::class, 'Konfirmasi']);;





//admin
Route::get('layout/admin', [adminController::class, 'mainAdmin']);;
Route::get('admin/Dashboard', [adminController::class, 'mainAdmin']);;
Route::get('admin/AdminKonfirmasi', [adminController::class, 'AdminKonfirmasi']);;
Route::get('admin/Barang', [adminController::class, 'Barang']);;
Route::get('admin/DataCustomer', [adminController::class, 'DataCustomer']);;
Route::get('admin/DaftarBarang', [adminController::class, 'DaftarBarang']);;
Route::get('admin/DaftarAdmin', [adminController::class, 'DaftarAdmin']);;
Route::get('admin/Review', [adminController::class, 'Review']);;