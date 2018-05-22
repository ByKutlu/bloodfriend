<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 15.5.2018
 * Time: 16:37
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\FormReply;

class FormQuestionReplyController extends Controller
{

    public function addReplies(Request $request){
        $data = $request->json()->all();
        $length = $data['length'];
        $user_id = $data['user_id'];
        for ($i = 0; $i < $length; $i++) {
            $form_reply = new FormReply();
            $form_reply->user_id = $user_id;
            $form_reply->donor_reply = $data['donor_reply_'.$i];
            $form_reply->form_question_id = $data['form_question_id_'.$i];
            $form_reply->save();
        }
    }
    public function getFormRepliesOfUser(Request $request)
    {
        $user_id = $request->user_id;
        return response()->json(FormReply::where('user_id',$user_id)->get());
    }
    public function updateReplies(Request $request){
        $data = $request->json()->all();
        $length = $data['length'];
        $user_id = $data['user_id'];
        for ($i = 0; $i < $length; $i++) {
            FormReply::where('user_id',$user_id)->where('form_question_id', ($i+1))->update(['donor_reply' => $data['donor_reply_'.$i]]);;
            /*$form_reply->user_id = $user_id;
            $form_reply->donor_reply = $data['donor_reply_'.$i];
            $form_reply->form_question_id = $data['form_question_id_'.$i];
            $form_reply->save();*/
        }

    }
}