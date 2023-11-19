<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

use function Laravel\Prompts\table;

class BarangController extends Controller
{
    public function index()
    {   
        $barang = Barang::all();
        return view('barang', compact('barang'));
    }

    public function search(Request $request)  
    {
        $request->validate([
            'keyword' => 'required'
          ]);

        $keyword = $request->input('keyword');
        $barang = Barang::where('nama_barang', 'like', "%$keyword%")
                        ->where('stok', '>', '0')
                        ->limit(5)
                        ->get();

        return response()->json($barang);
    }

    public function updateJumlahBarang(Request $request)
    {
        $jumlahBarang = $request->input('jumlahBarang');
        $barang = $jumlahBarang == 0 ? Barang::all() : Barang::take($jumlahBarang)->get();

        return view('partial', compact('barang'));
    }


    public function create(){

        return view('/barang');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'diskon' => 'nullable'
        ]);
        $barang = Barang::create($validatedData);
        
        return redirect('/barang')->with('success', ucwords($barang->nama_barang) . ' berhasil ditambahkan.');
    }

    public function edit($id){
        $barang = Barang::find($id);

        return view('barang', ['barang' => $barang]);
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'diskon' => 'nullable'
        ]);

        $barang = Barang::find($id);
        $barang->update($validatedData);
        Barang::where('id', $id)->update($validatedData);
        
        return redirect('/barang')->with('success', ucwords($barang->nama_barang) . ' berhasil diedit.');
    }
    
    
    public function destroy($id){
        $barang = Barang::find($id);
        Barang::destroy($id);
        
        return redirect('/barang')->with('success', ucwords($barang->nama_barang) . ' berhasil dihapus.');
    }
}
