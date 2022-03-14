<?php


namespace App\Helper\Account;


use App\Models\User\CreditCard;

class CreditCardGenerator
{
    public function generate($user, $request, $iban)
    {
        $bin = '42';
        $nameIIN = "Visa " . $request['debit_type'] == 'differ' ? 'Credit' : 'Debit';
        $lengh = 16;
        $CCN = $bin;

        for ($n = 0; $n <= 16 - strlen($bin); $n++) {
            $CCN = $CCN . mt_rand(0, 9);
        }

        $sum = 0;

        $iCCN = strrev($CCN);

        for ($j = 0; $j < $lengh; $j++) {
            $ch = $iCCN[$j];

            if ($j == 1 or $j == 3 or $j==5 or $j==7 or $j==9 or $j==11 or $j==13 or $j==15 or $j==17 or $j==19) {
                $ch = $ch * 2;
            }

            if ($ch > 9) {
                $ch = $ch - 9;
            }

            $sum = $sum + $ch;
        }

        if(bcmod($sum, 10) != 0) {
            $VCC = substr($CCN, 15,1);
            if($VCC == 0) {
                $mVCC = 10 - bcmod($sum, 10);
            } else {
                $mVCC = $VCC - bcmod($sum, 10);
            }

            $CCN = substr($CCN, 0, 15);
            $CCN = $CCN.$mVCC;
        }

        $expMonth = now()->format('m');
        $expYear = now()->addYears(3)->format('Y');

        $cryp = mt_rand(111,999);

        try {
            return CreditCard::create([
                "number" => $CCN,
                "type_cb" => $nameIIN,
                "exp_month" => $expMonth,
                "exp_year" => $expYear,
                "crypto_vis" => $cryp,
                "user_id" => $user->id,
                "iban_id" => $iban->id
            ]);
        }catch (\Exception $exception) {
            return $exception;
        }
    }
}
