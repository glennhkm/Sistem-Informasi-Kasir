<?php

use App\Models\Barang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;

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




// Route::view('/', 'welcome')->middleware('auth');
Route::view('/kasir', 'main')->middleware('auth');
Route::view('/transaksi', 'transaksi')->middleware('auth');
Route::view('/barang', 'barang')->middleware('auth');
// Route::get('/', [BarangController::class,'index']);
Route::get('/', [AuthController::class,'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class,'authenticate']);

