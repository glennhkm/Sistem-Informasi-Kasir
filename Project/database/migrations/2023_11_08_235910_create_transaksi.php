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
            $table->unsignedBigInteger('id_barang')->nullable();
            $table->unsignedBigInteger('kode_barang')->nullable();
            $table->string('nama_barang')->nullable();
            $table->integer('jumlah_barang');
            $table->unsignedInteger('sub_total')->nullable();
            $table->unsignedInteger('harga_total')->nullable();
            $table->decimal('pajak')->nullable();
            $table->timestamps();
            $table->foreign('id_barang')->references('id')->on('barang')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->dropForeign(['id_barang']);
            // $table->dropColumn('id_barang');
            
        });
        Schema::dropIfExists('transaksi');
    }
};
