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
//     return view('welcome');
// });


// customer
Route::get('index', [webController::class, 'index']);
Route::get('index', [webController::class, 'index']);
Route::get('status', [webController::class, 'status']);
Route::get('Notifikasi', [webController::class, 'Notifikasi']);
Route::get('Keranjang', [webController::class, 'Keranjang']);
Route::get('Profile', [webController::class, 'Profile']);
Route::get('Notifikasi', [webController::class, 'notif']);

Route::get('DetailBarang', [webController::class, 'DetailBarang']);
Route::get('Konfirmasi', [webController::class, 'Konfirmasi']);
Route::get('Login', function () {return view('Login');});
Route::get('Register', function () {return view('Register');});
Route::get('AboutUs', function () {return view('AboutUs');});
Route::get('Register', function () {return view('Register');});





//admin
Route::get('layout/admin', [adminController::class, 'mainAdmin']);;
Route::get('Dashboard', [adminController::class, 'mainAdmin']);;
Route::get('admin/AdminKonfirmasi', [adminController::class, 'AdminKonfirmasi']);;
Route::get('admin/Barang', [adminController::class, 'Barang']);;
Route::get('admin/DataCustomer', [adminController::class, 'DataCustomer']);;
Route::get('admin/DaftarBarang', [adminController::class, 'DaftarBarang']);;
Route::get('admin/DaftarAdmin', [adminController::class, 'DaftarAdmin']);;
Route::get('admin/Review', [adminController::class, 'Review']);;