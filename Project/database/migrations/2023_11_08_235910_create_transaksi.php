<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_barang');
            $table->unsignedBigInteger('id_karyawan');
            $table->unsignedInteger('sub_total')->nullable();
            $table->unsignedInteger('harga_total')->nullable();
            $table->decimal('pajak')->nullable();
            $table->timestamps();
            $table->foreign('id_barang')->references('id')->on('barang');
            $table->foreign('id_karyawan')->references('id')->on('karyawan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->dropForeign(['id_barang']);
            $table->dropColumn('id_barang');
            $table->dropForeign(['id_karyawan']);
            $table->dropColumn('id_karyawan');
            
        });
        Schema::dropIfExists('transaksi');
    }
};
