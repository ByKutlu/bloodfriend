<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';
    public $timestamps = false;
    protected $primaryKey ='city_id';

    public function towns(){
        return $this->hasMany('App\Town', 'city_id', 'city_id');
    }

}
