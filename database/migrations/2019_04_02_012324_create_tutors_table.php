<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->string('hobby',255);
            $table->integer('cellphone');
            $table->string('career',50);
            $table->date('date');
            $table->string('G', 1);
            $table->boolean('active_social_service')->default(0);
            $table->boolean('status')->default(1);
        });

        Schema::table('tutors', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutors');
    }
}
