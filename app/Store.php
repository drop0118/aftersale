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

    public static $city_map = ['北京','上海','广州','深圳','天津','成都','苏州','武汉','重庆','杭州','沈阳','南京','西安','青岛','长沙','宁波','大连','郑州','厦门','济南','无锡','哈尔滨','福州','合肥','昆明','东莞','石家庄','长春','呼和浩特','南昌','温州','佛山','贵阳','乌鲁木齐','海口','珠海'];
}
