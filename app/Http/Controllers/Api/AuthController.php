<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Otp\GoogleAuthenticator;
use Otp\Otp;
use Spatie\SlackAlerts\Facades\SlackAlert;

class AuthController extends Controller
{
    public function token()
    {
        $signate_code = \Str::upper(\Str::random(4));
        session()->put('code_auth_token', $signate_code);

        if(config('app.env') == 'local' || config('app.env') == 'test') {
            SlackAlert::message('Code Oauth: '.$signate_code);

            return response()->json();
        } else {
            // TODO: Implement SMS

            return response()->json();
        }
    }

    public function verify(Request $request)
    {
        if($request->get('code_auth_token') == session()->get('code_auth_token')) {
            return response()->json();
        } else {
            return response()->json(["error" => "Code Invalide"], 500);
        }
    }
}
