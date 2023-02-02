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
        // Creating Index
        // here inside 'up' method we will add and index
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // added unique constraint
            $table->string('email')->unique();
            $table->integer('tid');
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
        Schema::dropIfExists('teachers');
    }
};
