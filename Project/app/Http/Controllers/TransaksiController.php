<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Barang;

class TransaksiController extends Controller
{
    
    public function halamanTransaksi(){
        $transaksi = Transaksi::with('barang')->get();
        
        return view('transaksi', ['transaksi' => $transaksi]);
    }

    public function halamanMain(){
        $transaksi = Transaksi::with('barang')->get();

        return view('main', ['transaksi' => $transaksi]);
    }

    public function storeTransaksi(Request $request) 
    {
      foreach($request->all() as $item) {
        Transaksi::create([
          'id_barang' => $item['id_barang'],
          'kode_barang' => $item['id_barang'],
          'nama_barang' => $item['nama_barang'],
          'jumlah_barang' => $item['jumlah_barang'], 
          'sub_total' => $item['sub_total'],
          'harga_total' => $item['harga_total'],
          'pajak' => $item['pajak']
        ]);
      }

      return response()->json(['status' => 'OK']);
    }

}
