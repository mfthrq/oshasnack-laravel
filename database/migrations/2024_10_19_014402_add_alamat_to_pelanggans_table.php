<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAlamatToPelanggansTable extends Migration
{
    public function up()
    {
        Schema::table('pelanggans', function (Blueprint $table) {
            $table->string('alamat')->nullable(); // Tambahkan kolom alamat
        });
    }

    public function down()
    {
        Schema::table('pelanggans', function (Blueprint $table) {
            $table->dropColumn('alamat'); // Hapus kolom alamat jika migrasi dibatalkan
        });
    }
}
