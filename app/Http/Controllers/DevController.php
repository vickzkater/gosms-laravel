<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// USE LIBRARIES
use App\Libraries\GoSms;

class DevController extends Controller
{
    public function send_sms(Request $request)
    {
        // SET THE PARAMETERS
        $mobile = $request->input('mobile_phone');
        $message = $request->input('message');
        $trxid = uniqid();

        $result = GoSms::send($mobile, $message, $trxid);

        return $result; // Boolean
    }
}
