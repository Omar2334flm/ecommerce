<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification as FacadesNotification;

class EmailController extends Controller
{
    public function sendemail(  $id){

        $order =order::find(  $id);
        return view('admin.email_info',compact('order'));
    }

    public function send_user_email(Request $request,$id){

        $order =order::find($id);
          
        $details =[
         'greeting' => $request->greeting,
         'firstline' => $request->firstline,
         'body' => $request->body,
         'lastline' => $request->lastline,
         'button' => $request->button,
         'url' => $request->url,



        ];
            FacadesNotification::send($order,new SendEmailNotification($details));

            return redirect()->back();
    }
}
