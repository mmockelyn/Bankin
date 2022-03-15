<?php


namespace App\Service\Openpayd;


use Carbon\Carbon;
use http\Env;
use never;

class Transaction extends Openpayd
{
    /**
     * Créez un nouveau paiement sur un compte bancaire externe.
     * Un bénéficiaire devra être créé avant qu'un paiement puisse être effectué à l'aide de ce point de terminaison.
     * @param $accountId
     * @param $beneficiaryId
     * @param $currency
     * @param $value
     * @param $paymentType (Lien: https://apidocs.openpayd.com/docs/payment-types) |arrayString
     * @param $reference
     * @param $paymentDate
     * @param $reasonCode
     * @return object
     */
    public function payout($accountId, $beneficiaryId, $currency, float $value, $paymentType, $reference, $paymentDate, $reasonCode = null): object
    {
        return $this->post('transactions/bank-payouts', [
            'accountId' => $accountId,
            'beneficiaryId' => $beneficiaryId,
            'amount' => [
                'currency' => $currency,
                'value' => $value
            ],
            'paymentType' => $paymentType,
            'reference' => $reference,
            'paymentDate' => Carbon::createFromTimestamp(strtotime($paymentDate))->format('Y-m-d'),
            'reasonCode' => $reasonCode
        ]);
    }

    /**
     * Créez un versement sans créer au préalable un bénéficiaire.
     * Un bénéficiaire est automatiquement créé à partir des détails de cette demande.
     * @param $accountId
     * @param float $value
     * @param $paymentType (Lien: https://apidocs.openpayd.com/docs/payment-types) |arrayString
     * @param $reference
     * @param object $beneficiary (Lien: https://apidocs.openpayd.com/reference/create-bank-beneficiary)
     * @param $externalCustomerId
     * @param $reasonCode
     * @param object|null $metadata
     * @param string $currency
     * @return object
     */
    public function payout_beneficiary($accountId, float $value, $paymentType, $reference, object $beneficiary, $externalCustomerId, $reasonCode, object $metadata = null, $currency = 'EUR'): object
    {
        return $this->post('transactions/beneficiaryPayout', [
            'accountId' => $accountId,
            'amount' => [
                'currency' => $currency,
                'value' => $value
            ],
            'paymentType' => $paymentType,
            'reference' => $reference,
            'beneficiary' => $beneficiary,
            'externalCustomerId' => $externalCustomerId,
            'reasonCode' => $reasonCode,
            'metadata' => $metadata
        ]);
    }

    /**
     * Créez un virement interne entre deux comptes OpenPayd détenus dans la même devise.
     * @param $identifier_source
     * @param $identifier_destination
     * @param float $value
     * @param string $currency
     * @param null $comment
     * @param null $additionalParams
     * @return object
     */
    public function internalTransfer($identifier_source, $identifier_destination, float $value, $currency = 'EUR', $comment = null, $additionalParams = null): object
    {
        return $this->post('transactions', [
            'type' => 'TRANSFER',
            'source' => [
                'identifier' => $identifier_source,
                'type' => "ACCOUNT",
            ],
            'destination' => [
                'identifier' => $identifier_destination,
                'type' => "ACCOUNT",
            ],
            'amount' => [
                'currency' => $currency,
                'value' => $value
            ],
            'comment' => $comment,
            'additionalParams' => $additionalParams
        ]);
    }

    /**
     * Obtenez une transaction par son identifiant crypté.
     * @param $uuid
     * @return object
     */
    public function getTransaction($uuid): object
    {
        return $this->get('transactions/' . $uuid);
    }

    /**
     * Obtenir les détails de l'expéditeur d'une transaction Payin
     * @param $uuid
     * @return object
     */
    public function getPayin($uuid): object
    {
        return $this->get('transactions/payin/' . $uuid);
    }

    /**
     * Obtenez une liste de toutes les transactions filtrées par divers paramètres.
     * https://apidocs.openpayd.com/reference/list-transactions
     *
     * @param array $params
     * @return object
     */
    public function all(array $params = [])
    {
        return $this->get('transactions');
    }

    /**
     * Vérifiez une transaction de paiement avant qu'elle ne soit créditée sur un compte.
     * @param $uuid
     * @param $reviewStatus (APPROVED or REJECTED)
     * @param $comment
     * @param object|null $metadata
     * @return object
     */
    public function payinReview($uuid, $reviewStatus, $comment, object $metadata = null): object
    {
        return $this->post('transactions/review', [
            'transactionId' => $uuid,
            'reviewStatus' => $reviewStatus,
            'comment' => $comment,
            'metadata' => $metadata
        ]);
    }

    /**
     * Obtenez une liste de toutes les transactions de paiement en attente d'examen de votre part.
     *
     * @param array $params
     * @return object
     */
    public function payinReviewList(array $params = []): object
    {
        return $this->get('transactions/review', $params);
    }

    /**
     * Annulez un versement futur.
     *
     * @param $uuid
     * @return object
     */
    public function cancel($uuid): object
    {
        return $this->put('transactions/' . $uuid, [
            'status' => "CANCELLED"
        ]);
    }


    /**
     * Mettez à jour le statut de paiement de RELEASED à FAILED/`COMPLETED.
     * @param $uuid
     * @param $status (FAILED or COMPLETED)
     * @param $reason
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function updatePayoutStatus($uuid, $status, $reason)
    {
        if (config('app.env') == 'local' || config('app.env') == 'test') {
            return $this->post('simulator/payout/'.$uuid, [
                'status' => $status,
                'reason' => $reason
            ]);
        } else {
            return response()->json(null, 508);
        }
    }


}
