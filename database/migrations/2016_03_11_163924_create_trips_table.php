<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bus_id');
            $table->integer('town_from');
            $table->integer('town_to');
            $table->timestamp('started_at');
            $table->timestamp('ended_at');
            $table->string('status');
            $table->integer('passanger');
            $table->timestamps();

            // //foreign key
            // $table->foreign('bus_id')
            //     ->referencing('id')->on('busses')
            //     ->onUpdate('cascade')->onDelete('cascade');
            // //foreign key
            // $table->foreign('town_from')
            //     ->referencing('id')->on('towns')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
            // //foriegn key
            // $table->foreign('town_to')
            //     ->referencing('id')->on('towns')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trips');
    }
}
