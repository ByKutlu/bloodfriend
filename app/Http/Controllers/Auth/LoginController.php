<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        $request->session()->put('user_id', $user->user_id);
        $request->session()->put('email', $user->email);
        $request->session()->put('name', $user->name);
        $request->session()->put('surname', $user->surname);
        $request->session()->put('town_id', $user->town_id);
        $yetki = "donor";
        $userType = "donor";
        $userTypes = DB::table('user_type')->select('type')->where('user_id',$user->user_id)->get();
        $employee =  DB::table('employee')->select('employee_id','institution_id')->where('user_id',$user->user_id)->get()[0];
        $request ->session()->put('employee_id',$employee->employee_id);
        $request ->session()->put('institution_id',$employee->institution_id);
        $institution = DB::table('institution')->select('town_id')->where('institution_id',$employee->institution_id)->get()[0];
        $request ->session()->put('townIdOfInstitution',$institution->town_id);
        $count = 0;
        foreach($userTypes as $userTypee){
            if($userTypee->type == "employee"){
                $yetki="employee";
                $userType="employee";
                $request->session()->put('employee_role', DB::table('employee')->select('role')->where('user_id',$user->user_id)->get()[0]->role);
                $count++;
            }
            if($userTypee->type == "admin"){
                $yetki="admin";
                $count++;
            }
        }
        if($count>=2){
            $yetki="pro";
        }
        $request->session()->put('yetki', $yetki);
        $request->session()->put('user_type', $userType);
        //$request->session()->put('surname', $user->roles());
        //
    }

}
