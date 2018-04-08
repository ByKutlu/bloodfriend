<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model{
    protected $table = 'user_type';
    public $timestamps = false;
    protected $primaryKey = 'user_type_id';

    public function user(){
        return $this->belongsTo('App\User','user_id','user_id');
    }
}
?>