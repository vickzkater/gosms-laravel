# GoSMSGateway API - Laravel Library (GoSms)

GoSMSGateway API - Laravel Library
Worked on SMS API MODULE Version V.1.6

## Packages Used (Outside of Laravel)
- [guzzlehttp/guzzle](https://github.com/guzzle/guzzle)

## Feature

- Send SMS (Short Message Service)

## How-to-Use

Set GoSMSGateway auth credentials in `.env` file
```
...
GOSMS_AUTH_USER=xxx
GOSMS_AUTH_PASS=xxx
...
```

Copy `GoSms.php` to your Laravel project - for sample copy then paste in `app/Libraries`

In your Controller file, please include the GoSms library
```
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// USE LIBRARIES
use App\Libraries\GoSms;

class XxxController extends Controller
{
    ....
```

How to call the function send SMS using GoSms library
```
...
// SET THE PARAMETERS
$mobile = $request->input('mobile_phone');
$message = $request->input('message');
$trxid = uniqid();

$result = GoSms::send($mobile, $message, $trxid);

return $result; // Boolean
...
```

For sample, please check `DevController.php`

## Contributing

Thank you for considering contributing to the GoSms.

## Bugs, Improvements & Security Vulnerabilities

If you discover a bug or security vulnerability within GoSms, please send an email to Vicky Budiman at [vicky@kiniditech.com](mailto:vicky@kiniditech.com). All requests will be addressed promptly.

## Issues

If you come across any issue/bug please [report them here](https://github.com/vickzkater/gosms-laravel/issues).

## License

GoSms is open-sourced software built by KINIDI Tech and contributors and licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Credits

- Vicky Budiman (https://github.com/vickzkater)
- GoSMSGateway (https://gosmsgateway.com/)

<p align="center">Brought to you by</p>
<p align="center"><img src="https://hosting.kiniditech.com/kiniditech_logo.png" width="200" alt="KINDI Tech"></p>
<p align="center">KINIDI Tech</p>
