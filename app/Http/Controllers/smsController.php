<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use HTTP_Request2;

class smsController extends Controller
{
    protected function send_sms(Request $request){

        $message = $request->input('message');

        $request = new HTTP_Request2();
        $request->setUrl('https://w1k8q1.api.infobip.com/sms/2/text/advanced');
        $request->setMethod(HTTP_Request2::METHOD_POST);
        $request->setConfig(array(
            'follow_redirects' => TRUE
        ));
        $request->setHeader(array(
            'Authorization' => 'App a1b66d018473515968e6d784306c841f-1ad552f3-471e-4f33-a955-b0bfe75b9aa0',
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ));
        // $request->setBody('{"messages":[{"destinations":[{"to":"639947622663"}],"from":"DSWD","text":"$message"}]}');
        $request->setBody("{\"messages\":[{\"destinations\":[{\"to\":\"639947622663\"}],\"from\":\"DSWD\",\"text\":\"$message\"}]}");
        try {
            $response = $request->send();
            if ($response->getStatus() == 200) {
                // echo $response->getBody();
                return back()->with('data',"Announcement Have Been Sent");
            }
            else {
                echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
                $response->getReasonPhrase();
            }
        }
        catch(HTTP_Request2_Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }

        // foreach($data as $key => $value){
        //     echo "$key: $value <br>";
        // }

    }
}