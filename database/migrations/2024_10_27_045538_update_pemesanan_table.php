<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemesanan', function (Blueprint $table) {
            // Menambahkan kolom baru
            $table->integer('total_produk')->after('tanggal_pemesanan'); // Menambahkan total_produk
            $table->decimal('total_biaya_transaksi', 10, 2)->after('total_produk'); // Menambahkan total_biaya_transaksi

            // Menghapus kolom yang tidak diperlukan
            $table->dropColumn(['username', 'no_telp']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pemesanan', function (Blueprint $table) {
            // Menghapus kolom yang ditambahkan
            $table->dropColumn(['total_produk', 'total_biaya_transaksi']);

            // Menambahkan kembali kolom yang dihapus
            $table->string('username')->after('id_pelanggan'); // Mengembalikan username
            $table->string('no_telp')->after('username'); // Mengembalikan no_telp
        });
    }
}
