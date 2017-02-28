<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $table = 'brand';

    public function stores()
    {
        return $this->belongsToMany('App\Store', 'store_brand_map', 'brand_id', 'store_id');
    }

}
