<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class BloodRequestReply extends Model
{
    protected $table = 'blood_request_reply';
    public $timestamps = false;
    protected $primaryKey = 'blood_request_reply_id';
}