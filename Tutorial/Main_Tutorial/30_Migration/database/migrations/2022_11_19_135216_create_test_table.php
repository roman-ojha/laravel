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
        // command to run this function
        // php artisan migrate
        Schema::create('test', function (Blueprint $table) {
            // we can add column here
            $table->id();
            $table->string('name');
            $table->string('address');
            // by default 'timestamps' will create 'update_at' & 'create_at' columns
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // command to run this function
        // php artisan migrate:rollback

        // this function will delete the created table using 'up' function
        Schema::dropIfExists('test');
    }
};
