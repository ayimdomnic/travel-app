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
            $table->integer('national_id')->unique();
            $table->integer('phone_number');
            $table->string('first_name')->unique();
            $table->string('second_name')->unique();
            $table->string('bus_id')->unsigned()->index();
            $table->string('bus_plate_number')->unsigned()->index();
            $table->string('email')->unique();
            $table->string('password',60);

            $table->timestamps();

            // foreign keys
            $table->foreign('bus_id')
                ->references('id')->on('buses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            //foreign keys
            $table->foreign('bus_plate_number')
                ->references('registration_number')->on('buses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
