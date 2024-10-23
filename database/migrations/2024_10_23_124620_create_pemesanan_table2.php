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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id(); // Kolom id otomatis
            $table->foreignId('id_pelanggan')->constrained('pelanggans')->onDelete('cascade'); // Foreign key ke tabel pelanggans
            $table->dateTime('tanggal_pemesanan');
            $table->integer('total_produk');
            $table->decimal('total_biaya_transaksi', 10, 2);
            $table->string('bukti_transaksi')->nullable(); // Gambar bukti transaksi
            $table->enum('status', ['Diverifikasi', 'Berhasil', 'Gagal'])->default('Diverifikasi'); // Status pemesanan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
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
