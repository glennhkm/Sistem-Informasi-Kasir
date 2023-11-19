<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Transaksi extends Model  
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'id_barang',
        'kode_barang',
        'nama_barang',
        'jumlah_barang',
        'sub_total',
        'pajak',
        'harga_total',
    ];
    
    // public function getCreatedAtAttribute($value)
    // {
    //     return Carbon::parse($value)->translatedFormat('l, d F Y H:i:s');
    // }

    // public function getUpdatedAtAttribute($value)
    // {
    //     return Carbon::parse($value)->translatedFormat('l, d F Y H:i:s');
    // }

    // public function getSubTotalAttribute(){
        
    //     $sub_total = $this->barang->hargaSetelahDiskon() * $this->jumlah_barang;

    //     return $sub_total;
    // }

    public function totalSubTotal() 
    {
      return $this->get()->sum('sub_total');
    }

    public function barang()
    {
      return $this->belongsTo(Barang::class, 'id_barang');
    }


    // public function hitungTotal()
    // {
    //     if($this->barang) {
    //         return $this->sub_total - ($this->sub_total * $this->pajak);
    //     } else {
    //         return 0;
    //     }
    // }

//     public function getHargaTotalAttribute()
//   { 
//     return $this->hitungTotal();
//   }

    public static function boot() 
    {
        parent::boot();

        static::saved(function ($transaksi) {
            if($transaksi->barang) {
                $transaksi->updateStokBarang();
            }
        });
    }
    
    public function updateStokBarang()
    {
        $barang = $this->barang;
        $barang->stok -= $this->jumlah_barang;
        $barang->save();
    }

}
