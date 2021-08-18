<?php
namespace App\Domain;

use Illuminate\Support\Facades\Http;
use App\City;

class CitiesAPI{
    
    public static function fetch(){
        return City::all();
    }
}