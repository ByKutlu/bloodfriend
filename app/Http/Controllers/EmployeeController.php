<?php
namespace App\Http\Controllers;
use App\Person;
use App\Employee;
use App\City;
use App\Town;
use App\Institution;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{

    public function showPage(){
        $persons = Person::all();
        $employees = Employee::all();
        $institutions = Institution::all();
        $cities=City::all();
        return view('calisan')->with('cities',$cities)->with('persons',$persons)->with('employees',$employees)->with('institutions',$institutions);
    }



    public function addEmployee(Request $r){
        $person = new Person();
        $person->name = $r->name;
        $person->surname = $r->surname;
        $person->username = $r->username;
        $person->password = $r->password;
        $person->gender = $r->gender;
        $person->blood_group = $r->blood_group;
        $person->date_of_birth = $r->date_of_birth;
        $person->mail = $r->mail;
        $person->phone = $r->phone;
        $person->save();

        $employee = new Employee();
        $employee->person_id = $person->person_id;
        $employee->instution_id = $r->instution_id;
        $employee->save();
    }
    public function updateEmployee(Request $r){

    }
    public function deleteEmployee(Request $r){

    }
}