<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function info(Request $request)
    {
        $user = User::with('credit_cards', 'ibans', 'civility', 'address', 'pro', 'document', 'subscriptions', 'account', 'agence')->find($request->user()->id);

        return response()
            ->json($user);
    }
}
