<?php


namespace App\Helper\Account;


class CivilityEnum
{
    public static function render($field, $value)
    {
        switch ($field) {
            case 'type_account':
                switch ($value) {
                    case 'INDIVIDUAL': return 'Individuel'; break;
                    case 'JOIN': return 'Join'; break;
                    case 'PROFESSIONNAL': return 'Professionnel'; break;
                }
                break;
        }
    }
}
