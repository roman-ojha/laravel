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
        Schema::table('course', function (Blueprint $table) {
            // first we are adding a new column where we will add a foreign key constraint
            $table->unsignedBigInteger('teacher_id');
            // now adding foreign key constraint on 'course' table of teachers table
            $table->foreign('teacher_id')->references('id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course', function (Blueprint $table) {
            // here we will drop foreign key constraint on course column 'teacher_id'
            $table->dropForeign(['teacher_id']);
            // now we will drop the column after removing foreign key
            $table->dropColumn('teacher_id');
        });
    }
};
