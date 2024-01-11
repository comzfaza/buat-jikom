<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\penjualanController;
use App\Models\produk;
use Illuminate\Routing\RouteRegistrar;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view ('login') ;
});
Route::put('/update/{id}', [produkController::class,'edit'])->name('edit');
Route::put('/updatepro/{id}', [produkController::class,'perbarui' ]);
Route::get('/updatepro/{id}', [produkController::class,'update' ]);

Route::get('/hapus/{id}', [produkController::class,'delete']);
Route::get('/hapuspelanggan/{id}', [pelangganController::class,'hapus']);

Route::get('login', [loginController::class,'login']);

Route::get('register', [loginController::class,'register']);

Route::get('homdata', [produkController::class,'barang']);

Route::get('datalanggan', [pelangganController::class,'nama']);

Route::get('penjualan', [penjualanController::class,'data']);

Route::get('tambahproduk', [produkController::class, 'tambah']);

Route::post('tambahproduk', [produkController::class,'tambahproduk']);

Route::get('updatepro', [produkController::class,'perbaruhi']);

Route::get('tambahpelanggan', [pelangganController::class,'plus']);

Route::get('updatepelanggan', [pelangganController::class,'new']);

Route::get('/update/{id}', [produkController::class,'perbaruhi']);

