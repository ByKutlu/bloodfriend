<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 9.3.2018
 * Time: 09:57
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    public $timestamps = false;
    protected $primaryKey = 'employee_id';

    public function person(){
        return $this->belongsTo('App\Person', 'person_id', 'person_id');
    }
    public function institution(){
        return $this->belongsTo('App\Institution', 'institution_id', 'institution_id');
    }
    public function bloodRequests(){
        return $this->hasMany('App\BloodRequest','employee_id','employee_id');
    }

}