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
        // because we are trying to drop column in this migration file we will drop the column on up function
        Schema::table('mobile', function (Blueprint $table) {
            $table->dropColumn(['price','ram']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mobile', function (Blueprint $table) {
            // now here we will add the dropped column
            $table->float('price', 8, 2);
            $table->integer('ram');
        });
    }
};
