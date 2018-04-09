<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 11.3.2018
 * Time: 14:29
 */

namespace App\Http\Controllers;

use App\BloodRequest;
use App\Institution;
use Illuminate\Http\Request;

class BloodRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function kantalebi(){
        $isActive = FunctionController::getIsActiveOfMenu("kantalebi");
        return view('kantalebi')->with('isActive',$isActive);
    }

    public function kantalebilistesi(){
        $isActive = FunctionController::getIsActiveOfMenu("kantalebilistesi");
        return view('kantalebilistesi')->with('isActive',$isActive);
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
    }

    public function deleteBloodRequest(Request $request)
    {
        $bloodRequest = Institution::find($request->blood_request_id);
        $bloodRequest->delete();
    }

    public function makeInactive(Request $request)
    {
        $bloodRequest = Institution::find($request->blood_request_id);
        $bloodRequest->isActive = 0;
        $bloodRequest->save();
    }
}