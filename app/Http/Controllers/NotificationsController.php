<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    //sendemail
    public function sendEmail(Request @request){

        // Notification::create([
        //     "title" => $title,
        //     "content" => $content,
        //     "user_id" => $user_id]);

        // $user = Applicant::where("id","=",$user_id)->get()->first();

        // if($user!=null  && $user->playerId!=""){
        //     (new OneSignalController())->sendOneSignalNotificationToOne($title,$content,$user->playerId);
        // }
        return view('/notification_to_user', [
            "applicants"=>Applicant::orderBy("id","DESC")->get(),
            "info_title"=>$title,
            "info_message"=>$message
        ]);

    }
}
