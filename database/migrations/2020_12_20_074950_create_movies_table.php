<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('theaters', 64)->comment('Theater name');
            $table->string('movie', 64)->comment('Movie name');
            $table->date('show_date')->comment('Show date');
            $table->unsignedMediumInteger('no_seats')->comment('Number of seats');
            $table->string('image')->comment('Movie image');
            $table->string('time_show')->comment('Show Time');
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
        Schema::dropIfExists('movies');
    }
}
