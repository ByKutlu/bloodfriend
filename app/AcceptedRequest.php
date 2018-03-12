<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcceptedRequest extends Model
{
    protected $table = 'accepted_request';
    public $timestamps = false;
    protected $primaryKey ='accepted_request_id';

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }

    public function donor(){
        return $this->belongsTo('App\Donor', 'donor_id', 'donor_id');
    }

    public function bloodRequest(){
        return $this->belongsTo('App\BloodRequest', 'blood_request_id', 'blood_request_id');
    }
}
