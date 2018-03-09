<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormReply extends Model
{
    protected $table = 'form_reply';
    public $timestamps = false;
    protected $primaryKey ='form_reply_id';

    public function person(){
        return $this->belongsTo('App\Person', 'person_id', 'person_id');
    }
    public function formQuestion(){
        return $this->belongsTo('App\FormQuestion', 'form_question_id', 'form_question_id');
    }
}
