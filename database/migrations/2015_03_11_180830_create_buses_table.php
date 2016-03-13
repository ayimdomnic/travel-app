<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateBusesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function(Blueprint $table){
            $table->increments('id');
            $table->integer('registration_number');
            $table->integer('bus_id');
            $table->integer('company_id')->unsigned()->index();
            $table->string('status');
            $table->timestamps();

            //foreign keys
            $table->foreign('company_id')
                ->references('id')->on('companies')
                ->onUpdate('cascade')
                ->onDelete('cascade');


        });
    }

    public function drop(){
        Schema::drop('buses');

    }

}