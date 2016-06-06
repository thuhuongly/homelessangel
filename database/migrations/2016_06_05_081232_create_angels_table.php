<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAngelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angels', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('address');
            $table->string('profession');
            $table->date('date_of_birth');
            $table->boolean('anonymous')->default(false);
            $table->string('picture')->nullable();
            $table->unsignedInteger('totalGiving');
            $table->softDeletes();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');

        });

        Schema::table('angels', function($table) {
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
        Schema::dropIfExists('angels');
    }
}
