<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClasses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_division')->unsigned();
            $table->integer('id_career')->unsigned();
            $table->string('description', 55);
            $table->timestamps();
        });

        Schema::table('classes', function($table) {
            $table->foreign('id_division')->references('id')->on('divisions')
            ->onUpdate('cascade');
            $table->foreign('id_career')->references('id')->on('careers')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
