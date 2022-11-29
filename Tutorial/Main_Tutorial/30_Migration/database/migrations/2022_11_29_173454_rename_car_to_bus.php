<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // we will rename on 'up' function from 'car' to 'bus'
        Schema::rename('car', 'bus');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // on down function we will rollback to previous name
        Schema::rename('bus', 'car');
    }
};
