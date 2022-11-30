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
        // this will add a new column into the 'mobile' table
        Schema::table('mobile', function (Blueprint $table) {
            $table->string('memory');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // here we will write write method to remove the created column using 'up' function
        Schema::table('mobile', function (Blueprint $table) {
            // dropping created column
            $table->dropColumn('memory');

            // if you have to drop multiple column at once
            // $table->dropColumn(['memory','ram']);
        });
    }
};
