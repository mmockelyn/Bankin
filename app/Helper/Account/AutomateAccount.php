<?php


namespace App\Helper\Account;


use App\Models\User;
use Bavix\Wallet\Internal\Service\DatabaseServiceInterface;
use Bavix\Wallet\Models\Transaction;
use Ramsey\Uuid\Uuid;

class AutomateAccount
{

    public static function paidSubscriptionMonthly()
    {
        $users = User::all();
        $wallet = new Wallet();

        foreach ($users as $user) {
            foreach ($user->subscriptions as $subscription) {
                if ($subscription->created_at->day == now()->subDay()->day) {
                    $item = $subscription->subscription;

                    $wallet->createTransaction(
                        $user->id,
                        $subscription->wallet_id,
                        'fee',
                        ($item->price - $item->price) - $item->price,
                        $item->name,
                        'Frais Bancaire',
                        false,
                        $item->name,
                        now()->addDay());

                } elseif ($subscription->created_at->day == now()->day) {
                    foreach (Transaction::where('confirmed', 0)->whereBetween('created_at', [now()->startOfDay(), now()->endOfDay()])->get() as $item) {
                        if ($item->amount < 0) {
                            $item->wallet->update(['balance' => $item->wallet->balance + ($item->amount)]);
                        } else {
                            $item->wallet->update(['balance' => $item->wallet->balance + $item->amount]);
                        }

                        $item->confirmed = 1;
                        $item->save();
                    }
                }
            }
        }
    }
}
