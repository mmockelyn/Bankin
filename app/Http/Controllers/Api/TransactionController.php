<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Bavix\Wallet\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function showTransaction(Request $request, $uuid)
    {
        Carbon::setLocale('fr');
        $arr = [];
        $transaction = Transaction::where('uuid', $uuid)->first();

        $arr = [
            'tr' => $transaction,
            'date' => $transaction->created_at->isoFormat('d MMMM YYYY')
        ];

        return response()->json($arr);
    }
}
