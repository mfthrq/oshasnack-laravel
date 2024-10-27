<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyPemesananTable extends Migration
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
            $table->unsignedBigInteger('id_pelanggan')->after('id'); // Menambahkan kolom id_pelanggan
            
            // Menambahkan foreign key
            $table->foreign('id_pelanggan')->references('id')->on('users')->onDelete('cascade')
                  ->where('role_id', 2); // Mengatur foreign key ke tabel users dengan role_id = 2
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
            // Menghapus foreign key dan kolom yang ditambahkan
            $table->dropForeign(['id_pelanggan']); // Menghapus foreign key
            $table->dropColumn('id_pelanggan'); // Menghapus kolom id_pelanggan
        });
    }
}
