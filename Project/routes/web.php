<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/barang', function () {
    return view('barang');
});

Route::get('/editpembelian', function () {
    return view('editPembelian');
});

Route::get('/tambahbarang', function () {
    return view('tambahBarang');
});
