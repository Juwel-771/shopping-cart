<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request){
        if($request->has('email')){
            $email = $request->get('email');
            $pass = Rand(100001, 999999);

            $details = [
                'title'=>'Send you mail',
                'body'=>'Your password is <b>'.$pass.'</b>',
            ];

            Mail::to('$email')->send(new TestMail($details));

            return json_encode(['success'=>true, 'response_code'=>200]);
        }else{
            return json_encode(['success'=>false, 'response_code'=>404]);
        }
    }
}
