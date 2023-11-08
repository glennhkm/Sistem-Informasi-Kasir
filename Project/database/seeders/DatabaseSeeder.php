<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Barang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Barang::create([
            'nama_barang' => 'sepatu nike',
            'harga' => '500000',
            'stok' => 20,
            'diskon' => 0.2
        ]);
    }
}
