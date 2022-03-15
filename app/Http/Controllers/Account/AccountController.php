<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function dashboard(Request $request)
    {
        //dd(auth()->user()->wallet);
        if($request->user()->hasWallet('default') == true) {
            $request->user()->wallets()->where('slug', 'default')->first()->delete();
        }
        return view('account.dashboard');
    }

    public function info(Request $request)
    {
        $user = User::with('credit_cards', 'ibans', 'civility', 'address', 'pro', 'document', 'subscriptions',  'agence')->find($request->user()->id);

        return response()
            ->json($user);
    }
}
