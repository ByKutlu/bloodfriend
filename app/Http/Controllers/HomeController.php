<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            return view('home')->with('isActive',$isActive);
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
        $isActive = FunctionController::getIsActiveOfMenu("ayarlar");
        return view('ayarlar')->with('isActive',$isActive);
    }
}
