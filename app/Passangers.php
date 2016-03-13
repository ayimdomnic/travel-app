<?php

namespace App;
use App\Bus;
use App\Trip;

use Illuminate\Database\Eloquent\Model;

class Passangers extends Model
{
    protected $fillable = [
    	'national_id',
    	'phone_number',
    	'email',
    	'password',
    	'first_name',
    	'second_name'
    ];
    public function bus(){
    	return $this->belongsTo(Bus::class)
    }

    public function trip(){
    	return $this->belongsTo(Trip::class);
    }
}
