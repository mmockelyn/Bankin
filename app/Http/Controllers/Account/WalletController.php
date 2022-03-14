<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function show(Request $request, $uuid)
    {
        Carbon::setLocale('fr');
        $wallet = $request->user()->wallets()->where('uuid', $uuid)->first();
        $user = $request->user();

        return view('account.wallet.show', compact('wallet', 'user'));
    }
}
