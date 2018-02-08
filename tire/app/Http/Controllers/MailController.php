<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class MailController extends Controller
{
    public function send() {
        $name = 'Radision';
        $flag = \Mail::send('mails.test',['name'=>$name],function($message){
            $to = 'radision@126.com';
            $message ->to($to)->subject('hello from radision');
        });
        if($flag){
            echo '发送邮件成功，请查收！';
        }else{
            echo '发送邮件失败，请重试！';
        }
    }
}
