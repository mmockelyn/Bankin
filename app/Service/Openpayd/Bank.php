<?php


namespace App\Service\Openpayd;


class Bank extends Openpayd
{
    /**
     * Obtenez une liste de tous les comptes bancaires.
     * @param array $params
     * @return object|array
     */
    public function list(array $params = [])
    {
        return $this->get('bank-accounts', $params);
    }
}
