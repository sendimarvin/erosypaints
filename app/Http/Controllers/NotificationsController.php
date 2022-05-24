<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NotificationsController extends Controller
{
    //sendemail
    public function sendEmailx(Request $request){

        //dd($request->name);
        //email
        //subject
        //message


        Mail::send('email', $data = [], function ($m) use ($request) {
            $m->from("sendimarvin@gmail.com", config('app.name', 'APP Name'));
            $m->to("sendimarvin1@gmail.com", "Marvin Sendi")->subject('Test email laravel');
        });

        dd('email sent');

        // return view('contact', [
        //     "info_message"=>"Email has been send successfully"
        // ]);

    }

    public function sendEmail(Request $request)
    {
        //dd($request->message); 
        $info = array(
            'name' => $request->name,
            'email' => $request->email,
            'body' => $request->message,
            'subject' => $request->subject
        );
        Mail::send(['text' => 'email'], $info, function ($message) use ($request)
        {
            $message->to('info@erosypaints.com', 'EROSY INFO')
                ->subject($request->subject);
            $message->from($request->email, $request->name);
        });
        //echo "Successfully sent the email";
        return view("/contact",[
            "status"=>1,
        ]);
    }


    public function html_mail()
    {
        $info = array(
            'name' => "Alex"
        );
        Mail::send('mail', $info, function ($message)
        {
            $message->to('alex@example.com', 'w3schools')
                ->subject('HTML test eMail from W3schools.');
            $message->from('karlosray@gmail.com', 'Alex');
        });
        echo "Successfully sent the email";
    }
}
