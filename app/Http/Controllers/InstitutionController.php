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
use Illuminate\Validation\Rules\In;


class InstitutionController extends Controller
{

    public function showPage(){
        $institutions = Institution::all();
        $cities=City::all();
        return view('kurum')->with('cities',$cities)->with('institutions',$institutions);
    }

    public function addInstitution(Request $request){
        $institution = new Institution();
        $institution->name = $request->name;
        $institution->description = $request->description;
        $institution->phone = $request->phone;
        $institution->mail = $request->mail;
        $institution->fax = $request->fax;
        $institution->town_id = $request->town_id;
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