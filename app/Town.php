<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    protected $table = 'town';
    public $timestamps = false;
    protected $primaryKey ='town_id';


}
