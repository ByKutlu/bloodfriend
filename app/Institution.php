<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $table = 'institution';
    public $timestamps = false;
    protected $primaryKey ='institution_id';

    public function town(){
        return $this->belongsTo('App\Town', 'town_id', 'town_id');
    }
    public function employees(){
        return $this->hasMany('App\Employee', 'institution_id', 'institution_id');
    }
    public function bloodRequests(){
        return $this->hasMany('App\BloodRequest', 'institution_id', 'institution_id');
    }
}
