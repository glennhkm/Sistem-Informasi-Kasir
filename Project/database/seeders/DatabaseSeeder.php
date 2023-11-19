<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Barang;
use App\Models\Karyawan;
use App\Models\Transaksi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Barang::create([
            'nama_barang' => 'Kursi',
            'harga'=> 100500,
            'stok' => 4,
        ]);
        Barang::create([
            'nama_barang' => 'Lampu',
            'harga'=> 45000,
            'stok' => 19,
        ]);
        Barang::create([
            'nama_barang' => 'Baju',
            'harga'=> 100000,
            'stok' => 10,
            'diskon' => 15
        ]);
        Barang::create([
            'nama_barang' => 'sapu',
            'harga'=> 10000,
            'stok' => 8,
            'diskon' => 27
        ]);
        Barang::create([
            'nama_barang' => 'Pel',
            'harga'=> 34200,
            'stok' => 8,
            'diskon' => 27
        ]);
        Barang::create([
            'nama_barang' => 'aqua gelas',
            'harga'=> 25000,
            'stok' => 50,
            'diskon' => 0
        ]);
        Barang::create([
            'nama_barang' => 'sapu lidi',
            'harga'=> 15000,
            'stok' => 10,
            'diskon' => 0
        ]);
        Barang::create([
            'nama_barang' => 'mama lemon',
            'harga'=> 5000,
            'stok' => 8,
            'diskon' => 0
        ]);
        Barang::create([
            'nama_barang' => 'lifebuoy',
            'harga'=> 4000,
            'stok' => 1,
            'diskon' => 0
        ]);
        Barang::create([
            'nama_barang' => 'rinso',
            'harga'=> 15000,
            'stok' => 100,
            'diskon' => 3
        ]);
        Barang::create([
            'nama_barang' => 'marlboro merah',
            'harga'=> 40000,
            'stok' => 100,
            'diskon' => 0
        ]);
        Barang::create([
            'nama_barang' => 'sampoerna mild',
            'harga'=> 32000,
            'stok' => 5,
            'diskon' => 0
        ]);

        
        // Karyawan::create([
        //     'username' => 'kelompokhore',
        //     'password' => 'kelompokhore'
        // ]);
    }
}
