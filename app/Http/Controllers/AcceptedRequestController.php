<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 19.5.2018
 * Time: 16:50
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\AcceptedRequest;


class AcceptedRequestController extends Controller
{

    public function addAcceptedRequest(Request $request)
    {
        $acceptedRequest = new AcceptedRequest();
        $acceptedRequest->blood_request_id = $request->blood_request_id;
        $acceptedRequest->user_id = $request->user_id;
        $acceptedRequest->status = $request->status;
        $acceptedRequest->save();
    }

    public function getAcceptedRequests(Request $request){
        $user_id = $request->user_id;
        //$acceptedRequests = AcceptedRequest::where('user_id',$user_id)->get();
        $acceptedRequests = AcceptedRequest::with('bloodRequest')->where('user_id',$user_id)->get();
        return response()->json($acceptedRequests);
    }
}