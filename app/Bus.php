<?php

namespace App;
use App\Passanger,
use App\Company;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = [
    'registration_number',
    'company_id',//everycompanies bus o
    'bus_id',
    'capacity',
    'status',  
    ];

    public function passanger(){
    	return $this->hasMany(Passanger::class);

    }
    public function company(){
    	return $this->belongsTo(Company::class);
    }
    public function trip(){
    	return $this->hasMany(Trip::class);
    }
}


