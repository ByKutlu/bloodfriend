<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\BloodRequest;
use App\Employee;
use Illuminate\Http\Request;
use App\City;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->get('user_type')=="employee"){
            $isActive = FunctionController::getIsActiveOfMenu("home");
            $institution_id=session()->get('institution_id');
            $employeeCount=Employee::where('institution_id',$institution_id)->count();

            $attendanceCompletedCount=DB::table('blood_request')
                ->join('accepted_request', 'blood_request.blood_request_id', '=', 'accepted_request.blood_request_id')
                ->where('blood_request.institution_id',$institution_id)->where('status','C')
                ->count();

            $acceptedCount=DB::table('blood_request')
                ->join('accepted_request', 'blood_request.blood_request_id', '=', 'accepted_request.blood_request_id')
                ->where('blood_request.institution_id',$institution_id)->count();

            $rejectedCount=DB::table('blood_request')
                ->join('rejected_request', 'blood_request.blood_request_id', '=', 'rejected_request.blood_request_id')
                ->where('blood_request.institution_id',$institution_id)->count();

            $bloodRequests=BloodRequest::where('institution_id',$institution_id)->orderBy('blood_request_id','desc')->take(7)->get();

            return view('home')->with('isActive',$isActive)->with('employeeCount',$employeeCount)
                ->with('attendanceCompletedCount',$attendanceCompletedCount)
                ->with('acceptedCount',$acceptedCount)
                ->with('rejectedCount',$rejectedCount)
                ->with('bloodRequests',$bloodRequests);
        }
        elseif(session()->get('user_type')=="admin"){
            return redirect()->route('instution');
        }
        else{
            abort(403);
        }
    }

    public function hakkimizda()
    {
        $isActive = FunctionController::getIsActiveOfMenu("hakkimizda");
        return view('hakkimizda')->with('isActive',$isActive);
    }

    public function ayarlar()
    {
        $cities=City::all();
        $isActive = FunctionController::getIsActiveOfMenu("ayarlar");
        return view('ayarlar')->with('isActive',$isActive)->with("cities",$cities);
    }
}
