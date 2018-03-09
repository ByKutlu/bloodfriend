<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormReply extends Model
{
    protected $table = 'form_reply';
    public $timestamps = false;
    protected $primaryKey ='form_reply_id';

}
