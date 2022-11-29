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
        // we can check doest the table that we are trying to create exit or not
        if (!Schema::hasTable('car')) {
            // if table doesn't exist then we will create a table
            Schema::create('car', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('car')) {
            // if table exist only then we will drop the table
            Schema::drop('car');
            // Schema::dropIfExists('car');
        }
    }
};
