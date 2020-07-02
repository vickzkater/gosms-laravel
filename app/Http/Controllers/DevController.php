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
		$type = 0;
		$debug = false;

		$result = GoSms::send($mobile, $message, $trxid, $type, $debug);

        return $result; // Boolean
    }
}
