<?php
namespace App\Http\Controllers;
use App\City;
use App\Town;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    public function getCities(){
        return response()->json(City::all());
    }

    public function getTowns($city_id){
        return response()->json(Town::where("city_id",$city_id)->get());
    }
}