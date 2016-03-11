<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassangersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passangers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('national_id');
            $table->integer('phone_number');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('email')->unique();
            $table->string('password',60);

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
        Schema::drop('passangers');
    }
}
