<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RejectedRequest extends Model
{
    protected $table = 'rejected_request';
    public $timestamps = false;
    protected $primaryKey ='rejected_request_id';

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }

    public function donor(){
        return $this->belongsTo('App\Donor', 'donor_id', 'donor_id');
    }

    public function bloodRequest(){
        return $this->belongsTo('App\BloodRequest', 'blood_request_id', 'blood_request_id');
    }

    public function rejectedDescription(){
        return $this->belongsTo('App\RejectedDescription', 'rejected_description_id', 'rejected_description_id');
    }
}
