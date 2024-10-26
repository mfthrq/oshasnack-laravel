<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class DropAdminsTable extends Migration
{
    public function up()
    {
        // Drop the admins table if it exists
        Schema::dropIfExists('admins');
    }

    public function down()
    {
        // Optionally, you can leave this empty
        // or recreate the table if needed
    }
}
