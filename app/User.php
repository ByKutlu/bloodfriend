<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $primaryKey ='user_id';

    public function town(){
        return $this->belongsTo('App\Town', 'town_id', 'town_id');
    }

    public function formReplies(){
        return $this->hasMany('App\FormReply', 'user_id', 'user_id');
    }

    public function roles(){
        return $this->hasMany('App\UserRole', 'user_id', 'user_id');
    }

    public function employee(){
        return $this->hasOne('App\Employee','user_id','user_id');
    }
    public function donors(){
        return $this->hasMany('App\Donor','user_id','user_id');
    }
    public function bloodRequestReplies(){
        return $this->hasMany('App\BloodRequestReply','user_id','user_id');
    }

    public function bloodRequests(){
        return $this->hasMany('App\BloodRequest','user_id','user_id');
    }

    public function acceptedRequests(){
        return $this->hasMany('App\AcceptedRequest','user_id','user_id');
    }

    public function rejectedRequests(){
        return $this->hasMany('App\RejectedRequest','user_id','user_id');
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

