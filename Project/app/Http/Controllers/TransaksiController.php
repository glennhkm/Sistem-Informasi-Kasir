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

        // sama seperti di atas
        $transaksi = Transaksi::with('barang')->get();
      
        $model = new Transaksi();
        $totalSubTotal = $model->totalSubTotal();
        $hargaTotal = $model->totalSubTotal() + ($model->totalSubTotal() * 0.1);

        return view('main', [
           'transaksi' => $transaksi,
           'totalSubTotal' => $totalSubTotal,
           'hargaTotal' => $hargaTotal
        ]);
    }

    public function storeTransaksi(Request $request) 
    {
      foreach($request->all() as $item) {

        Transaksi::create([
          'id_barang' => $item['id_barang'],
          'jumlah_barang' => $item['jumlah_barang']
        ]);
      
      }

      return response()->json(['status' => 'OK']);
    }

}
