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
            $table->integer('bus_id')->unsigned()->index();
            $table->integer('town_from')->unsigned()->index();
            $table->integer('town_to')->unsigned()->index();
            $table->timestamp('started_at');
            $table->timestamp('ended_at');
            $table->string('status');
            $table->integer('passanger');
            $table->timestamps();

            //foreign key
            $table->foreign('bus_id')
                ->references('id')->on('buses')
                ->onUpdate('cascade')->onDelete('cascade');
            //foreign key
            $table->foreign('town_from')
                ->references('id')->on('towns')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            //foriegn key
            $table->foreign('town_to')
                ->references('id')->on('towns')
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
        Schema::drop('trips');
    }
}
