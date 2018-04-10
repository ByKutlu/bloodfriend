<?php
namespace App\Http\Controllers;
use App\User;
use App\Employee;
use App\City;
use App\UserType;
use App\Institution;
use Illuminate\Http\Request;
use App\Http\Controllers\FunctionController;
//use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showPage(){
        if(session()->get('user_type')=="employee" && session()->get('employee_role')=="manager"){
            $user = User::find(session()->get('user_id'));
            $institution = $user->employee->institution;
            $employees=$institution->employees;
            $cities=City::all();
            $isActive = FunctionController::getIsActiveOfMenu("calisan");
            return view('calisan_kurum_yoneticisi')->with('isActive',$isActive)->with('cities',$cities)->with('employees',$employees)->with('institution',$institution);
        }
        elseif(session()->get('user_type')=="admin"){
            $employees = Employee::where("role","manager")->get();
            $institutions = Institution::all();
            $cities=City::all();
            $isActive = FunctionController::getIsActiveOfMenu("calisan");
            return view('calisan_sistem_yoneticisi')->with('isActive',$isActive)->with('cities',$cities)->with('employees',$employees)->with('institutions',$institutions);
        }
        else{
            abort(403);
        }
    }

    public function addEmployee(Request $r){
        $person = new User();
        $person->name = $r->name;
        $person->surname = $r->surname;
        $person->username = $r->username;
        $person->password = bcrypt($r->password);
        $person->gender = $r->gender;
        $person->blood_group = $r->blood_group;
        $person->date_of_birth = $r->date_of_birth;
        $person->email = $r->mail;
        $person->phone = $r->phone;
        $person->town_id = $r->town_id;
        $person->save();

        $employee = new Employee();
        $employee->user_id = $person->user_id;
        if(session()->get('user_type')=="admin"){
            $employee->institution_id = $r->institution;
            $employee->role = "manager";
        }
        else{
            $employee->institution_id = session()->get('institution_id');
            $employee->role = $r->role;
        }
        $employee->save();

        $userType = new UserType();
        $userType->user_id=$person->user_id;
        $userType->type = "employee";
        $userType->save();
        return redirect()->route('employee');
    }

    public function updateEmployee(Request $r){
        $person = User::find($r->user_id);
        $person->name = $r->name;
        $person->surname = $r->surname;
        $person->username = $r->username;
        if($r->password!=""){
            $person->password = bcrypt($r->password);
        }
        $person->gender = $r->gender;
        $person->blood_group = $r->blood_group;
        $person->date_of_birth = $r->date_of_birth;
        $person->email = $r->email;
        $person->phone = $r->phone;
        $person->town_id = $r->town_id;
        $person->save();

        $employee = Employee::where("user_id",$person->user_id)->first();
        if(session()->get('user_type')=="admin"){
            $employee->institution_id = $r->institution;
        }
        else{
            $employee->role = $r->role;
        }
        $employee->save();
        return redirect()->route('employee');
    }

    public function deleteEmployee(Request $r){
        User::find($r->user_id)->delete();
        return redirect()->route('employee');
    }
}