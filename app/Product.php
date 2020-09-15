<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }
    public function bids()
    {
        return $this->hasMany('App\Bid');
    }
}
