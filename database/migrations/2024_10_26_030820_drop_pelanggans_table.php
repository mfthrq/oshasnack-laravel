<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class DropPelanggansTable extends Migration
{
    public function up()
    {
        // Drop the pelanggans table if it exists
        Schema::dropIfExists('pelanggans');
    }

    public function down()
    {
        // Optionally, you can leave this empty
        // or recreate the table if needed
    }
}
