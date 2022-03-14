<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
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
}
