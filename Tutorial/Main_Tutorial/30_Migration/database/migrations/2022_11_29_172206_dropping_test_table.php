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
        // so now for dropping inside up function we have to delete the table

        // Schema::drop('test');
        // OR
        Schema::dropIfExists('test');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // on down function while roll back if on 'up' function we are dropping the table we have to create the table here
        Schema::create('test', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }
};
