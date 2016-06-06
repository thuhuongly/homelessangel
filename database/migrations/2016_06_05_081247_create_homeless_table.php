<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomelessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeless', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('nickname');
            $table->date('date_of_birth');
            $table->string('location');
            $table->string('picture')->nullable();
            $table->unsignedInteger('homeless_years');
            $table->softDeletes();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });

        Schema::table('homeless', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homeless');
    }
}
