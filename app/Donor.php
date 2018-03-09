<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $table = 'donor';
    public $timestamps = false;
    protected $primaryKey = 'donor_id';
}