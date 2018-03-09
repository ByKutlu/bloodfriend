<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $table = 'donor';
    public $timestamps = false;
    protected $primaryKey = 'donor_id';

    public function person(){
        return $this->belongsTo('App\Person', 'person_id', 'person_id');
    }
}