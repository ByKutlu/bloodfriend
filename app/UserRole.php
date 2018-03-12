<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model{
    protected $table = 'user_role';
    public $timestamps = false;
    protected $primaryKey = 'user_role_id';

    public function user(){
        return $this->belongsTo('App\User','user_id','user_id');
    }
}
?>