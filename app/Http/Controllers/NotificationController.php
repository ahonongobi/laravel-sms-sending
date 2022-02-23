<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendSmsNotificaition()
    {
        $basic  = new \Vonage\Client\Credentials\Basic("xxx", "xxx");
        $client = new \Vonage\Client($basic);
 
        $message = $client->message()->send([
            'to' => '22962508883',
            'from' => 'Gobi abyssinie',
            'text' => 'Je te salut william depuis un test de code'
        ]);
 
        dd('SMS message has been delivered.');
    }
}
