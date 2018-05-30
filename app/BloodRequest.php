<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model{
    protected $table = 'blood_request';
    public $timestamps = false;
    protected $primaryKey = 'blood_request_id';

    public function bloodRequestTowns()
    {
        return $this->hasMany('App\BloodRequestTown', 'blood_request_id', 'blood_request_id');
    }

    public function employeeMadeRequest()
    {
        return $this->hasOne('App\Employee', 'blood_request_id', 'blood_request_id');
    }
    public function town()
    {
        return $this->belongsTo('App\Town', 'town_id', 'town_id');
    }
    public function institution()
    {
        return $this->belongsTo('App\Institution','institution_id','institution_id');
    }
    public function employee(){
        return $this->belongsTo('App\Employee','employee_id','employee_id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id','user_id');
    }

    public function acceptedRequest(){
        return $this->hasMany('App\AcceptedRequest','blood_request_id','blood_request_id');
    }


    public function rejectedRequest(){
        return $this->hasMany('App\RejectedRequest','blood_request_id','blood_request_id');
    }

    public function acceptedCount(){
        return $this->acceptedRequest->count();
    }

    public function completedCount(){
        return $this->acceptedRequest->where('status','C')->count();
    }
}
?>