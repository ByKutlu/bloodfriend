<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 18.5.2018
 * Time: 01:16
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RejectedDescription;


class RejectedDescriptionController extends Controller
{

    public function getRejectedDescriptions(){
        return response()->json(RejectedDescription::all());
    }
}