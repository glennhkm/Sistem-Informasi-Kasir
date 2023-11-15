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
        // Barang::create([
        //     'nama_barang' => 'Meja',
        //     'harga'=> 9200,
        //     'stok' => 2,
        //     'diskon' => 80
        // ]);
        // Barang::create([
        //     'nama_barang' => 'Kursi',
        //     'harga'=> 124500,
        //     'stok' => 4,
        // ]);
        // Barang::create([
        //     'nama_barang' => 'Lampu',
        //     'harga'=> 45000,
        //     'stok' => 19,
        // ]);
        // Barang::create([
        //     'nama_barang' => 'Baju',
        //     'harga'=> 100000,
        //     'stok' => 10,
        //     'diskon' => 15
        // ]);
        // Barang::create([
        //     'nama_barang' => 'Pel',
        //     'harga'=> 34200,
        //     'stok' => 8,
        //     'diskon' => 27
        // ]);

        // Transaksi::create([
        //     'id_barang' => 142,
        //     'jumlah_barang' => 2,
        //     'sub_total' => 25000,
        //     'harga_total' => 50000,
        //     'pajak' => 20,
        // ]);

        // Transaksi::create([
        //     'id_barang' => 6,
        //     'jumlah_barang' => 1,
        //     'sub_total' => 65000,
        //     'harga_total' => 1000000,
        //     'pajak' => 0,
        // ]);

        Transaksi::create([
            'id_barang' => 9,
            'jumlah_barang' => 5,
            // 'sub_total' => 0,
            // 'harga_total' => 0,
            // 'pajak' => 0.1,
        ]);

        // Karyawan::create([
        //     'username' => 'kelompokhore',
        //     'password' => 'kelompokhore'
        // ]);
    }
}
