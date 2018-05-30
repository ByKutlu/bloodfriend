<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 11.3.2018
 * Time: 14:29
 */

namespace App\Http\Controllers;

use App\AcceptedRequest;
use App\BloodRequest;
use App\BloodRequestTown;
use App\Town;
use App\City;
use App\Institution;
use League\Flysystem\Exception;
use Illuminate\Http\Request;

class BloodRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function kantalebi(){
        $institution = Institution::find(session()->get('institution_id'));
        $cities=City::all();
        $townOfInstitution=Town::find(session()->get('townIdOfInstitution'));
        $cityOfInstitution=$townOfInstitution->city;
        $isActive = FunctionController::getIsActiveOfMenu("kantalebi");
        return view('kantalebi')->with('isActive',$isActive)->with('townOfInstitution',$townOfInstitution)
            ->with('cityOfInstitution',$cityOfInstitution)->with('cities',$cities)->with('institution',$institution);
    }

    public function kantalebilistesi(){
        $bloodRequests = BloodRequest::all();
        $isActive = FunctionController::getIsActiveOfMenu("kantalebilistesi");
        return view('kantalebilistesi')->with('isActive',$isActive)->with('bloodRequests',$bloodRequests);
    }

    public function kantalebi_incele($id){
        $bloodRequest = BloodRequest::find($id);
        $acceptedRequests = AcceptedRequest::where('blood_request_id',$bloodRequest->blood_request_id)->get();
        $isActive = FunctionController::getIsActiveOfMenu("kantalebilistesi");
        return view('kantalebi_incele')->with('isActive',$isActive)->with('bloodRequest',$bloodRequest)
            ->with('acceptedRequests',$acceptedRequests);
    }

    public function getBloodRequests($institution_id){
        return response()->json(BloodRequest::where("institution_id",$institution_id)->get());
    }

    public function addBloodRequest(Request $request)
    {
        $bloodRequest = new BloodRequest();
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
            $bloodRequestTown = new BloodRequestTown();
            $bloodRequestTown->town_id = $town;
            $bloodRequestTown->blood_request_id = $bloodRequest->blood_request_id;
            $bloodRequestTown->save();
        }

        echo $bloodRequest->blood_request_id;
    }

    public function deleteBloodRequest(Request $request)
    {
        $bloodRequest = BloodRequest::find($request->blood_request_id);
        $bloodRequest->delete();
    }
    public function attendanceCompleted(Request $request)
    {
        $acceptedRequest = AcceptedRequest::find($request->accepted_request_id);
        $acceptedRequest->status='C';
        $acceptedRequest->save();
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