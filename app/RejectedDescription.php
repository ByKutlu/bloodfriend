<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RejectedDescription extends Model
{
    protected $table = 'rejected_description';
    public $timestamps = false;
    protected $primaryKey ='rejected_description_id';

    public function bloodRequest(){
        return $this->hasMany('App\RejectedRequest', 'rejected_request_id', 'rejected_request_id');
    }
}
