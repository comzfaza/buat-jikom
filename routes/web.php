<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/', function () {
    return view('welcome');
});

Route::put('/update/{id}', [produkController::class,'edit'])->name('edit');
Route::post('/updatepro/{id}', [produkController::class,'perbarui' ]);
Route::get('/updatepro/{id}', [produkController::class,'update' ]);
Route::get('/update/{id}', [produkController::class,'perbaruhi']);

Route::put('/update/{id}', [pelangganController::class,'edit'])->name('edit');
Route::get('/updatepelanggan/{id}', [pelangganController::class,'update' ]);
Route::post('/updatepelanggan/{id}', [pelangganController::class,'updatepelanggan' ]);

Route::get('/hapus/{id}', [produkController::class,'delete']);
Route::get('/hapuspelanggan/{id}', [pelangganController::class,'hapus']);

Route::get('halamanhom', [produkController::class,'halaman']);

Route::get('homdata', [produkController::class,'barang']);

Route::get('datalanggan', [pelangganController::class,'nama']);

Route::get('penjualan', [penjualanController::class,'data']);

Route::get('tambahproduk', [produkController::class, 'tambah']);
Route::post('tambahproduk', [produkController::class,'tambahproduk']);

Route::get('updatepro', [produkController::class,'perbaruhi']);

Route::post('tambahpelanggan', [pelangganController::class,'menambah']);
Route::get('tambahpelanggan', [pelangganController::class,'plus']);

Route::get('updatepelanggan', [pelangganController::class,'new']);

Route::get('datapenjualan', [penjualanController::class,'datapenjualan']);

Route::post('penjualan', [penjualanController::class,'store']);
Route::post('checkout', [penjualanController::class,'checkout']);

Route::get('halamanhom', [loginController::class,'hom']);