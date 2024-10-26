<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Kolom id
            $table->unsignedBigInteger('role_id'); // Kolom role_id
            $table->string('email')->unique(); // Kolom email
            $table->string('username'); // Kolom username
            $table->string('no_telp'); // Kolom no_telp
            $table->text('alamat'); // Kolom alamat
            $table->string('password'); // Kolom password
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
