<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Twilio Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your Twilio settings. You can get these values
    | from your Twilio Console at https://console.twilio.com/
    |
    */

    'account_sid' => env('TWILIO_ACCOUNT_SID'),
    'auth_token' => env('TWILIO_AUTH_TOKEN'),
    'phone_number' => env('TWILIO_PHONE_NUMBER'),
];
