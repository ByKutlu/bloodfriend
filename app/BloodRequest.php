<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class BloodRequest extends Model{
    protected $table = 'blood_request';
    public $timestamps = false;
    protected $primaryKey = 'blood_request_id';
}
?>