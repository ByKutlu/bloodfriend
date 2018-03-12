<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    protected $table = 'town';
    public $timestamps = false;
    protected $primaryKey ='town_id';

    public function city(){
        return $this->belongsTo('App\City','city_id','city_id');
    }
    public function users(){
        return $this->hasMany('App\User','town_id','town_id');
    }
    public function bloodRequests(){
        return $this->hasMany('App\BloodRequest','town_id','town_id');
    }
}
