<?php


namespace App\Service\Openpayd;

/**
 * Class Accounts
 * @package App\Service\Openpayd
 */
class Accounts extends Openpayd
{
    /**
     * Retourne la liste des comptes bacaires
     * @param array $params (Liste des filtres: https://apidocs.openpayd.com/reference/list-accounts)
     * @return object
     */
    public function all(array $params = []): object
    {
        return $this->get('accounts', $params);
    }

    /**
     * Création de compte
     * @param string $currency Code ISO (EUR, GBP, etc...)
     * @param string $nameAccount
     * @return object
     */
    public function create(string $currency, string $nameAccount): object
    {
        return $this->post('accounts', [
            'currency' => $currency,
            'friendlyName' => $nameAccount
        ]);
    }

    /**
     * Fiche d'un compte
     * @param string $account_id
     * @return object
     */
    public function getAccount(string $account_id): object
    {
        return $this->get('accounts/' . $account_id);
    }

    /**
     * Mise à jour d'un compte
     * @param string $account_id
     * @param string|null $nameAccount
     * @return object
     */
    public function update(string $account_id, string $nameAccount = null): object
    {
        return $this->put('accounts/' . $account_id, [
            'friendlyName' => $nameAccount
        ]);
    }

    /**
     * Cloture d'un compte
     * @param string $account_id
     * @return object
     */
    public function close(string $account_id): object
    {
        return $this->put('accounts/' . $account_id, [
            'status' => 'CLOSED'
        ]);
    }
}
