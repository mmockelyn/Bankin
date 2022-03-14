<?php


namespace App\Helper\Account;


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
            }
        }
    }
}
