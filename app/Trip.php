<?php

namespace App;

use App\Bus;
use App\Passanger;
use App\Town;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable =[
		'bus_id',
		'fare',
		'town_from',
		'town_to',
		'started_at',
		'ended_at',
		'status',
		'passangers'

    ];

    public function bus(){
    	return $this->hasmany(Bus::class);
    }
    public function town(){
    	return $this->belongsTo(Trip::class);
    }

    public function passangers(){
    	return $this->hasMany(Passanger::class);
    }
}
