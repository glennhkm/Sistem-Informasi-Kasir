<?php

use App\Models\Barang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;

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



Route::get('/login', [AuthController::class,'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class,'authenticate']);
Route::resource('/barang', BarangController::class)->middleware('auth');
Route::get('/update-jumlah-barang', [BarangController::class, 'updateJumlahBarang']);
Route::get('/transaksi', [TransaksiController::class, 'halamanTransaksi'])->middleware('auth');
Route::get('/', [TransaksiController::class, 'halamanMain'])->middleware('auth');
Route::get('/search-barang', [BarangController::class, 'search'])->name('search.barang');
Route::post('/transaksi', [TransaksiController::class, 'storeTransaksi']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');