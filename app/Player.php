<?php

namespace App;
use App\Car;
use App\Address;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}

