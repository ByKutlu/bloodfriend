<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model{
    protected $table = 'blood_request';
    public $timestamps = false;
    protected $primaryKey = 'blood_request_id';

    public function bloodRequestReplies()
    {
        return $this->hasMany('App\BloodRequestReply', 'blood_request_id', 'blood_request_id');
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
}
?>