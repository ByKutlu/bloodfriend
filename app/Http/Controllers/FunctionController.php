<?php
namespace App\Http\Controllers;
use App\City;
use App\Town;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class FunctionController extends Controller
{
    static public function getIsActiveOfMenu($whichMenuActive){

        $isActive["home"]=" ";
        $isActive["kantalebi"]=" ";
        $isActive["kantalebilistesi"]=" ";
        $isActive["calisan"]=" ";
        $isActive["kurum"]=" ";
        $isActive["hakkimizda"]=" ";
        $isActive["ayarlar"]=" ";
        $isActive[$whichMenuActive]="active";
        $isActive["employee_id"]=session()->get('employee_id');
        $isActive["institution_id"]=session()->get('institution_id');
        $isActive["townIdOfInstitution"]=session()->get('townIdOfInstitution');
        $isActive["user_id"]=session()->get('user_id');
        return $isActive;
    }

    public function changeUserType(){
        if(session()->get('yetki')=="pro"){
            if(session()->get('user_type')=="admin"){
                session()->put('user_type', "employee");
            }
            elseif (session()->get('user_type')=="employee"){
                session()->put('user_type', "admin");
            }
        }
        else{
            abort(403);
        }
        return redirect()->route('home');
    }

    public function sessionControl(){
        if(session()->get('yetki')=="pro" || session()->get('user_type')=="admin") {

        }
    }
}