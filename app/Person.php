<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Person extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'person';
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


    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

