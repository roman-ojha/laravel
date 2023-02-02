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
        Schema::table('laptop', function (Blueprint $table) {
            // Migration to rename the column name
            $table->renameColumn('model_name', 'name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laptop', function (Blueprint $table) {
            //
            // we will roll back to the precious name here
            $table->renameColumn('name', 'model_name');
        });
    }
};
