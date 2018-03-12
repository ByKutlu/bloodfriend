<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $table = 'donor';
    public $timestamps = false;
    protected $primaryKey = 'donor_id';

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }

    public function BloodRequestReplies(){
        return $this->hasMany('App\BloodRequestReply', 'donor_id', 'donor_id');
    }

    public function FormReplies(){
        return $this->hasMany('App\FormReply', 'donor_id', 'donor_id');
    }

    public function acceptedRequests(){
        return $this->hasMany('App\AcceptedRequest','donor_id','donor_id');
    }

    public function rejectedRequests(){
        return $this->hasMany('App\RejectedRequest','donor_id','donor_id');
    }

}