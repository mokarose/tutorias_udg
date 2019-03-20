<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorsCalledTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors_called', function (Blueprint $table) {
            $table->integer("user_id")->unsigned();
            $table->integer("convocatory_id")->unsigned();
        });

        Schema::table('tutors_called', function($table) {
            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade');
            $table->foreign('convocatory_id')->references('id')->on('convocatories')
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
        Schema::dropIfExists('tutors_called');
    }
}
