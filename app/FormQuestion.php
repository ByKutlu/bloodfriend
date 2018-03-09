<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 9.3.2018
 * Time: 09:58
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class FormQuestion extends Model
{
    protected $table = 'form_question';
    public $timestamps = false;
    protected $primaryKey = 'form_question_id';
}