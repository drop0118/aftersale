<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    protected $table = 'store';

    public function brands()
    {
        return $this->belongsToMany('App\Brand');
    }

}
