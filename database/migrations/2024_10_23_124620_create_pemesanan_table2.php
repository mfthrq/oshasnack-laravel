<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('pemesanan')) {
            Schema::create('pemesanan', function (Blueprint $table) {
                $table->id();
                $table->foreignId('id_pelanggan')->constrained();
                $table->dateTime('tanggal_pemesanan');
                $table->integer('total_produk');
                $table->decimal('total_biaya_transaksi', 10, 2);
                $table->string('bukti_transaksi')->nullable();
                $table->enum('status', ['Diverifikasi', 'Berhasil', 'Gagal'])->default('Diverifikasi');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
}
