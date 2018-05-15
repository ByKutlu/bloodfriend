<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 15.5.2018
 * Time: 13:52
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\FormQuestion;

class FormQuestionController extends Controller
{
    public function getQuestions(){
        return response()->json(FormQuestion::all());
    }
}