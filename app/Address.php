<?php

namespace App;
use App\Player;
use App\Country;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function players()
    {
        return $this->hasOne(Player::class);
    }

    public function Country()
    {
        return $this->belongsTo(Country::class);
    }
}
