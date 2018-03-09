<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class BloodRequestReply extends Model
{
    protected $table = 'blood_request_reply';
    public $timestamps = false;
    protected $primaryKey = 'blood_request_reply_id';

    public function person()
    {
        return $this->belongsTo('App\Person', 'person_id', 'person_id');
    }
    public function bloodRequest()
    {
        return $this->belongsTo('App\BloodRequest', 'blood_request_id', 'blood_request_id');
    }
}