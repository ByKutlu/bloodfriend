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
        $persons = User::all();
        $employees = Employee::all();
        $institutions = Institution::all();
        $cities=City::all();
        $isActive = FunctionController::getIsActiveOfMenu("calisan");
        return view('calisan')->with('isActive',$isActive)->with('cities',$cities)->with('persons',$persons)->with('employees',$employees)->with('institutions',$institutions);
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
        $employee->institution_id = $r->institution_id;
        $employee->role = $r->role;
        $employee->save();

        $userType = new UserType();
        $userType->user_id=$person->user_id;
        $userType->type = "employee";
        $userType->save();
    }

    public function updateEmployee(Request $r){
        $person = User::find($r->user_id);
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

        $employee = Employee::where("user_id",$person->user_id);
        $employee->institution_id = $r->institution_id;
        $employee->role = $r->role;
        $employee->save();
    }

    public function deleteEmployee(Request $r){
        User::find($r->user_id)->delete();
    }
}