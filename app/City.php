<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    // special variable that EM looks for to determine if you can do mass updates
    protected $fillable = ['name', 'state', 'population_2010', 'population_rank'];
    
}
