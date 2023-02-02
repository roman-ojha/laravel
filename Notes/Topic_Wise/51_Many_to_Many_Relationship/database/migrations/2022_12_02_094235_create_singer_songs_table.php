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
        // creating an intermediate table that will connect 'Singer' and 'Song' to make Many to Many relationship
        Schema::create('singer_songs', function (Blueprint $table) {
            $table->id();

            // creating two foreign key to make relation with 'Singer' & 'Song' Model
            // creating relation with 'Singer' Table
            $table->unsignedBigInteger('singer_id');
            $table->foreign('singer_id')->references('id')->on('singers');

            // creating relation with 'Song' Table
            // $table->unsignedBigInteger('song_id');
            // $table->foreign('song_id')->references('id')->on('songs');

            // Another way to create foreign key
            $table->foreignId('song_id')->constrained('songs');
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
        Schema::dropIfExists('singer_songs');
    }
};
