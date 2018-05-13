<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 13.5.2018
 * Time: 01:33
 */

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function addDonor(Request $request){
        $person = new User();
        //$data = json_decode($request);
        $person->name = $request->name;
        $person->surname = $request->surname;
        $person->username = $request->username;
        $person->password = $request->password;
        $person->gender = $request->gender;
        $person->blood_group = $request->blood_group;
        $person->date_of_birth = $request->date_of_birth;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->town_id = $request->town_id;


        /*$person->name = $request->get("name");
        $person->surname =  $request->get("surname");
        $person->username =  $request->get("username");
        $person->password =  $request->get("password");
        $person->gender =  $request->get("gender");
        $person->blood_group =  $request->get("blood_group");
        $person->date_of_birth =  $request->get("date_of_birth");
        $person->email =  $request->get("email");
        $person->phone =  $request->get("phone");
        $person->town_id =  $request->get("town_id");*/
        $person->save();
    }
}