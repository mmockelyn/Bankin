<?php


namespace App\Helper\Account;


use Bavix\Wallet\Models\Transaction;
use Ramsey\Uuid\Uuid;

class Wallet
{
    public static function getMonth($number)
    {
        switch ($number) {
            case 1:
                return 'Janvier';
            case 2:
                return 'Février';
            case 3:
                return 'Mars';
            case 4:
                return 'Avril';
            case 5:
                return 'Mai';
            case 6:
                return 'Juin';
            case 7:
                return 'Juillet';
            case 8:
                return 'Aout';
            case 9:
                return 'Septembre';
            case 10:
                return 'Octobre';
            case 11:
                return 'Novembre';
            case 12:
                return 'Décembre';
        }
    }

    public static function formatIconType($type, $format = 'text')
    {
        if ($format == 'text') {
            switch ($type) {
                case 'deposit':
                    return 'Dépot';
                    break;
                case 'withdraw':
                    return 'Retrait';
                    break;

                case 'payment':
                    return 'Carte Bancaire';
                    break;

                case 'transfer':
                    return 'Virement Bancaire';
                    break;

                case 'sepa':
                    return 'Prélèvement Bancaire';
                    break;

                case 'fee':
                    return 'Frais Bancaire';
                    break;
            }
        } else {
            switch ($type) {
                case 'deposit':
                    return '/storage/icons/wallet-deposit.png';
                    break;
                case 'withdraw':
                    return '/storage/icons/wallet-withdraw.png';
                    break;

                case 'payment':
                    return '/storage/icons/wallet-payment.png';
                    break;

                case 'transfer':
                    return '/storage/icons/wallet-transfer.png';
                    break;

                case 'sepa':
                    return '/storage/icons/wallet-sepa.png';
                    break;

                case 'fee':
                    return '/storage/icons/wallet-fee.png';
                    break;
            }
        }
    }

    public function createTransaction($user_id, $wallet_id, $type, $amount, $holder, $category, $confirmed = true, $designation = null, $programmed = null)
    {
        $transaction = Transaction::create([
            "payable_type" => "App\Models\User",
            "payable_id" => $user_id,
            "wallet_id" => $wallet_id,
            "type" => $type,
            "amount" => $amount,
            "confirmed" => $confirmed,
            "meta" => [
                "holder" => $holder,
                "category" => $category,
                "designation" => $designation,
                "programmed_at" => $programmed
            ],
            'uuid' => Uuid::uuid1(),
        ]);

        $wallet = \Bavix\Wallet\Models\Wallet::find($wallet_id);

        if ($confirmed == true) {
            $this->updatedBalance($wallet_id, $transaction->amount);
        }

    }

    public function confirmTransaction($uuid)
    {
        $transaction = Transaction::where('uuid', $uuid)->first();

        $transaction->confirmed = true;
        $transaction->save();

        $this->updatedBalance($transaction->wallet_id, $transaction->amount);
    }

    protected function updatedBalance($wallet_id, $amount)
    {
        $wallet = \Bavix\Wallet\Models\Wallet::find($wallet_id);

        $wallet->balance += $amount;
        $wallet->save();
    }
}
