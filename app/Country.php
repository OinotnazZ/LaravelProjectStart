<?php

namespace App;
use App\Address;


use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
