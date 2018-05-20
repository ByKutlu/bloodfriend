<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class BloodRequestTown extends Model
{
    protected $table = 'blood_request_town';
    public $timestamps = false;
    protected $primaryKey = 'blood_request_town_id';

    public function town()
    {
        return $this->belongsTo('App\Town', 'town_id', 'town_id');
    }

    public function bloodRequest()
    {
        return $this->belongsTo('App\BloodRequest', 'blood_request_id', 'blood_request_id');
    }
}
?>