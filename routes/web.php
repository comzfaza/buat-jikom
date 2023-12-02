<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\halamanController;


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

Route::get('login', [loginController::class,'login']);

Route::get('register', [loginController::class,'register']);

Route::get('homdata', [halamanController::class,'barang']);

Route::get('tambahproduk', [halamanController::class,'tambah']);

Route::get('updatepro', [halamanController::class,'perbaruhi']);

