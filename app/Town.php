<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    protected $fillable = [
    'name'
    ];

    public function bus(){
    	return $this->hasMany(Bus::class);
    }

    public function trip(){
    	return $this->hasMany(Trip::class);
    }

    //todo: more relationships
    public function passanger(){ 
    	return $this-.hasMany(Passanger::class);
    }
}
