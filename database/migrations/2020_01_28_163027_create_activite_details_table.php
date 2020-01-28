<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiviteDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activite_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('title');
            $table->text('description');
            $table->integer('activite_id')->unsigned();
            $table->foreign('activite_id')
              ->references('id')->on('activites')
              ->onDelete('cascade');
            $table->integer('lang_id')->unsigned();
            $table->foreign('lang_id')
              ->references('id')->on('langs')
              ->onDelete('cascade');
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
        Schema::dropIfExists('activite_details');
    }
}
