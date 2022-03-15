<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Erdemkeren\Otp\OtpFacade;
use Erdemkeren\Otp\Token;
use Erdemkeren\Otp\TokenNotification;
use Illuminate\Http\Request;
use Spatie\SlackAlerts\Facades\SlackAlert;


class FirebaseController extends Controller
{
    public function token(Request $request)
    {
        $token = OtpFacade::create($request->user()->id, 6);

        dd($token);
    }

    public function check(Request $request)
    {

    }
}
