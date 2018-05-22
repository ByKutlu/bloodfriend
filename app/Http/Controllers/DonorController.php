<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 13.5.2018
 * Time: 01:33
 */

namespace App\Http\Controllers;
use App\Donor;
use App\User;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function addDonor(Request $request){
        $person = new User();

        $data = $request->json()->all();
        $person->name = $data['name'];
        $person->surname = $data['surname'];
        $person->username = $data['username'];
        $person->password = $data['password'];
        $person->gender =$data['gender'];
        $person->blood_group = $data['blood_group'];
        $person->date_of_birth = $data['date_of_birth'];
        $person->email = $data['email'];
        $person->phone = $data['phone'];
        $person->town_id = $data['town_id'];

        $person->save();

        $donor = new Donor();
        $donor->user_id = $person->user_id;
        $donor ->is_approved = 1;
        $donor->save();

    }

    public function loginDonor(Request $request){
        $email = $request->email;
        $password = $request->password;
        return response()->json(User::where('email',$email)->where('password', $password)->get());
    }

    public function getDonorInfo(Request $request){
        $user_id = $request->user_id;
        return response()->json(Donor::where('user_id',$user_id)->get());
    }

    public function updateDonor(Request $request){
        $donor = User::find($request->user_id);
        $donor->email = $request->email;
        $donor->password = $request->password;
        $donor->town_id = $request->town_id;
        $donor->phone = $request->phone;
        $donor->save();
    }

    public function forgotPassword(Request $request){
        $donor = User::where('email',$request->email)->get();
       /* Mail::send('emails.reminder', ['user' => $donor], function ($m) use ($donor) {
            $m->from('sercanoktay7@gmail.com', 'Blood Friend');
            $m->to($donor->email, $donor->name);
            $m->subject('Your Reminder!');
        });*/
        return response()->json($donor);
    }

}