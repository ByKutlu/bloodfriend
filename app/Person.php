<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';
    public $timestamps = false;
    protected $primaryKey ='person_id';

    public function town(){
        return $this->belongsTo('App\Town', 'town_id', 'town_id');
    }

    public function formReplies(){
        return $this->hasMany('App\FormReply', 'person_id', 'person_id');
    }
    public function employee(){
        return $this->hasOne('App\Employee','person_id','person_id');
    }
    public function donors(){
        return $this->hasMany('App\Donor','person_id','person_id');
    }
    public function bloodRequestReplies(){
        return $this->hasMany('App\BloodRequestReply','person_id','person_id');
    }


}
