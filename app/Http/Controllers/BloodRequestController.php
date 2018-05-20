<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 11.3.2018
 * Time: 14:29
 */

namespace App\Http\Controllers;

use App\BloodRequest;
use App\Town;
use App\City;
use App\Institution;
use Illuminate\Http\Request;

class BloodRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function kantalebi(){
        $cities=City::all();
        $townOfInstitution=Town::find(session()->get('townIdOfInstitution'));
        $cityOfInstitution=$townOfInstitution->city;
        $isActive = FunctionController::getIsActiveOfMenu("kantalebi");
        return view('kantalebi')->with('isActive',$isActive)->with('townOfInstitution',$townOfInstitution)
            ->with('cityOfInstitution',$cityOfInstitution)->with('cities',$cities);
    }

    public function kantalebilistesi(){
        $bloodRequests = BloodRequest::all();
        $isActive = FunctionController::getIsActiveOfMenu("kantalebilistesi");
        return view('kantalebilistesi')->with('isActive',$isActive)->with('bloodRequests',$bloodRequests);
    }

    public function getBloodRequests($institution_id){
        return response()->json(BloodRequest::where("institution_id",$institution_id)->get());
    }

    public function addBloodRequest(Request $request)
    {
        $bloodRequest = new BloodRequest();
        $bloodRequest->town_id = $request->town_id;
        $bloodRequest->blood_type = $request->blood_type;
        $bloodRequest->blood_group = $request->blood_group;
        $bloodRequest->date = $request->date;
        $bloodRequest->institution_id = $request->institution_id;
        $bloodRequest->is_active = $request->is_active;
        $bloodRequest->unit_number = $request->unit_number;
        $bloodRequest->employee_id = $request->employee_id;
        $bloodRequest->user_id = $request->user_id;
        $bloodRequest->save();

        foreach ($request->towns as $town){
            
        }
    }

    public function deleteBloodRequest(Request $request)
    {
        $bloodRequest = BloodRequest::find($request->blood_request_id);
        $bloodRequest->delete();
    }
    public function updateBloodRequest(Request $request){
        $bloodRequest = BloodRequest::find($request->blood_request_id);
        $bloodRequest->town_id = $request->town_id;
        $bloodRequest->blood_type = $request->blood_type;
        $bloodRequest->blood_group = $request->blood_group;
        $bloodRequest->date = $request->date;
        $bloodRequest->institution_id = $request->institution_id;
        $bloodRequest->is_active = $request->is_active;
        $bloodRequest->unit_number = $request->unit_number;
        $bloodRequest->employee_id = $request->employee_id;
        $bloodRequest->user_id = $request->user_id;
        $bloodRequest->save();
    }

    public function makeInactiveBloodRequest(Request $request)
    {
        $bloodRequest = BloodRequest::find($request->blood_request_id);
        $bloodRequest->is_active = 0;
        $bloodRequest->save();
    }
}