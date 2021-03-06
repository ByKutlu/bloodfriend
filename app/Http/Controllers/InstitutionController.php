<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 9.3.2018
 * Time: 16:39
 */

namespace App\Http\Controllers;
use App\City;
use App\Institution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\Rules\In;


class InstitutionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showPage(){
        $institutions = Institution::all();
        $cities=City::all();
        $isActive = FunctionController::getIsActiveOfMenu("kurum");
        return view('kurum')->with('isActive',$isActive)->with('cities',$cities)->with('institutions',$institutions);
    }

    public function addInstitution(Request $request){
        //print_r($request->town_id);
        $institution = new Institution();
        $institution->name = $request->name;
        $institution->address = $request->description;
        $institution->phone = $request->phone;
        $institution->mail = $request->mail;
        $institution->fax = $request->fax;
        $institution->town_id = $request->town_id;
        $institution->description = "Devlet Hastanesi";
        $institution->save();
    }
    public function updateInstitution(Request $request){
        $institution = Institution::find($request->institution_id);
        $institution->name = $request->name;
        $institution->description = $request->description;
        $institution->phone = $request->phone;
        $institution->mail = $request->mail;
        $institution->fax = $request->fax;
        $institution->town_id = $request->town_id;
        $institution->save();
    }
    public function deleteInstitution(Request $request){
        $institution = Institution::find($request->institution_id);
        $institution->delete();
    }
}