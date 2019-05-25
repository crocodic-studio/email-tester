<?php

namespace crocodicstudio\emailtester\controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class EmailTesterController extends BaseController
{

    public function getIndex()
    {
        return view("emailtester::email_form");
    }

    public function postSend()
    {
        Config::set('mail.driver',request("driver"));
        Config::set('mail.host',request('hostname'));
        Config::set('mail.port', request('port'));
        if(request('encryption')) {
            Config::set('mail.encryption',request('encryption'));
        }

        Config::set('mail.username',request('username'));
        Config::set('mail.password',request('password'));

        $logger = new \Swift_Plugins_Loggers_ArrayLogger();
        Mail::getSwiftMailer()->registerPlugin(new \Swift_Plugins_LoggerPlugin($logger));

        $data['debug'] = "";

        try{
            Mail::send("emailtester::blank",['content'=>request('content')],function($message) {
                $message->priority(1);
                $message->to(request('to'));
                $message->from("email-tester@".$_SERVER['SERVER_NAME'],"Email Tester Agent");
                $message->subject(request("subject"));
            });
        }catch(\Swift_TransportException $e) {
             $data['debug'] .= $e->getMessage();
        }


        $data['debug'] .= $logger->dump();

        return view("emailtester::email_form", $data);
    }
}