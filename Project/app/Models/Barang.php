<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';

    public function hargaSetelahDiskon(){
        return $this -> harga - ($this -> harga * $this -> diskon);
    }
    use HasFactory;
}
