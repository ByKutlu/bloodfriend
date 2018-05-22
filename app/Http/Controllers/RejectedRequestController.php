<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 18.5.2018
 * Time: 01:47
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\RejectedRequest;


class RejectedRequestController extends Controller
{

    public function addRejectedRequest(Request $request)
    {
        $rejectedRequest = new RejectedRequest();
        $rejectedRequest->blood_request_id = $request->blood_request_id;
        $rejectedRequest->user_id = $request->user_id;
        $rejectedRequest->rejected_description_id = $request->rejected_description_id;
        $rejectedRequest->save();
    }

    public function getRejectedRequests(Request $request){
        $user_id = $request->user_id;
        //$acceptedRequests = AcceptedRequest::where('user_id',$user_id)->get();
        $rejectedRequests = RejectedRequest::with('bloodRequest')->where('user_id',$user_id)->get();
        return response()->json($rejectedRequests);
    }
}