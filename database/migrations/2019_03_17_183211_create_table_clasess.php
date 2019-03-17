<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClasess extends Migration
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
            $table->bigInteger('id_division');
            $table->bigInteger('id_career');
            $table->string('description', 55);
            $table->timestamps();
            $table->foreign('od_division')->references('id')->on('divisions')
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
