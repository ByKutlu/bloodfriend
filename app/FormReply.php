<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormReply extends Model
{
    protected $table = 'form_reply';
    public $timestamps = false;
    protected $primaryKey ='form_reply_id';

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }

    public function donor(){
        return $this->belongsTo('App\Donor', 'donor_id', 'donor_id');
    }

    public function formQuestion(){
        return $this->belongsTo('App\FormQuestion', 'form_question_id', 'form_question_id');
    }
}
