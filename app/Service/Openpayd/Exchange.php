<?php


namespace App\Service\Openpayd;


class Exchange extends Openpayd
{
    /**
     * Obtenez un taux de change indicatif pour une ou plusieurs paires de devises.
     *
     * @param array $params
     * @return object
     */
    public function getQuote(array $params = []): object
    {
        return $this->get('transactions/exchange/quote/basic', $params);
    }

    /**
     * Obtenez un devis détaillé pour un échange, y compris un quoteId et des frais pour la réservation finale d'un échange.
     * @param $identifier_source
     * @param $identifier_dest
     * @param float $value
     * @param string $currency
     * @return object
     */
    public function getDetails($identifier_source, $identifier_dest, float $value, $currency = 'EUR'): object
    {
        return $this->post('transactions/exchange/quote/detailed', [
            'source' => [
                'identifier' => $identifier_source,
                'type' => 'ACCOUNT'
            ],
            'destination' => [
                'identifier' => $identifier_dest,
                'type' => 'ACCOUNT'
            ],
            'fixedSide' => 'SELL',
            'amount' => [
                'currency' => $currency,
                'value' => $value
            ]
        ]);
    }

    /**
     * Créez une transaction d'échange entre deux comptes OpenPayd détenus dans des devises différentes.
     * @param $identifier_source
     * @param $identifier_dest
     * @param float $value
     * @param null $currency
     * @param null $quoteId
     * @return object
     */
    public function create($identifier_source, $identifier_dest, float $value, $currency = null, $quoteId = null): object
    {
        return $this->post('transactions/exchange', [
            'quoteId' => $quoteId,
            'source' => [
                'identifier' => $identifier_source,
                'type' => 'ACCOUNT'
            ],
            'destination' => [
                'identifier' => $identifier_dest,
                'type' => 'ACCOUNT'
            ],
            'fixedSide' => 'SELL',
            'amount' => [
                'currency' => $currency,
                'value' => $value
            ]
        ]);
    }
}
