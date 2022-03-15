<?php


namespace App\Service\Openpayd;

/**
 * Class BankBeneficiary
 * L'objet Bénéficiaire Banque permet de conserver toutes les coordonnées bancaires externes associées à un bénéficiaire.
 * Chaque Bénéficiaire Banque est associé à un Bénéficiaire parent.
 * https://apidocs.openpayd.com/reference/bank-beneficiary-object
 * @package App\Service\Openpayd
 */
class BankBeneficiary extends Openpayd
{
    /**
     * Obtenez une liste des bénéficiaires bancaires filtrés par différents paramètres.
     * https://apidocs.openpayd.com/reference/list-bank-beneficiaries
     *
     * @param array $params
     * @return object
     */
    public function all(array $params = []): object
    {
        return $this->get('bank-beneficiaries', $params);
    }

    /**
     * Créez un nouveau bénéficiaire bancaire CORPORATE sous un bénéficiaire parent.
     * Les champs obligatoires exacts peuvent varier en fonction du pays et de la devise du compte bancaire du bénéficiaire et peuvent être déterminés via l'API Beneficiary Required Details.
     * https://apidocs.openpayd.com/reference/create-bank-beneficiary
     * @param $uuid_parent
     * @param $bankAccountCurrency (EUR,GBP,ETC...)
     * @param $paymentTypes (Liste des type: https://apidocs.openpayd.com/docs/payment-types)
     * @param $beneficiaryCountry (ISO 2 Characters)
     * @param $bankAccountCountry (ISO 2 Characters)
     * @param $metadata
     * @return object
     */
    public function createCorporate($uuid_parent, $bankAccountCurrency, $paymentTypes, $beneficiaryCountry, $bankAccountCountry, array $metadata = []): object
    {
        return $this->post('beneficiaries/'.$uuid_parent.'/bank-beneficiaries', [
            'bankAccountCurrency' => $bankAccountCurrency,
            'paymentTypes' => $paymentTypes,
            'beneficiaryType' => "CORPORATE",
            'beneficiaryCountry' => $beneficiaryCountry,
            'bankAccountCountry' => $bankAccountCountry,
            'metadata' => $metadata
        ]);
    }

    /**
     * Créez un nouveau bénéficiaire bancaire RETAIL sous un bénéficiaire parent.
     * Les champs obligatoires exacts peuvent varier en fonction du pays et de la devise du compte bancaire du bénéficiaire et peuvent être déterminés via l'API Beneficiary Required Details.
     * https://apidocs.openpayd.com/reference/create-bank-beneficiary
     * @param $uuid_parent
     * @param $bankAccountCurrency (EUR,GBP,ETC...)
     * @param $paymentTypes (Liste des type: https://apidocs.openpayd.com/docs/payment-types) [string]
     * @param $beneficiaryCountry (ISO 2 Characters)
     * @param $bankAccountCountry (ISO 2 Characters)
     * @param $metadata
     * @return object
     */
    public function createRetail($uuid_parent, $bankAccountCurrency, $paymentTypes, $beneficiaryCountry, $bankAccountCountry, array $metadata = []): object
    {
        return $this->post('beneficiaries/'.$uuid_parent.'/bank-beneficiaries', [
            'bankAccountCurrency' => $bankAccountCurrency,
            'paymentTypes' => $paymentTypes,
            'beneficiaryType' => "RETAIL",
            'beneficiaryCountry' => $beneficiaryCountry,
            'bankAccountCountry' => $bankAccountCountry,
            'metadata' => $metadata
        ]);
    }

    /**
     * Obtenir un bénéficiaire bancaire par son identifiant.
     * @param $uuid
     * @return object
     */
    public function getter($uuid): object
    {
        return $this->get('bank-beneficiaries/'.$uuid);
    }

    /**
     * Mettre à jour un bénéficiaire bancaire existant.
     * L'ensemble complet des coordonnées bancaires du bénéficiaire doit être fourni pour la mise à jour.
     * https://apidocs.openpayd.com/reference/update-bank-beneficiary
     *
     * @param $uuid
     * @param $bankAccountCurrency
     * @param $paymentTypes
     * @param $beneficiaryType
     * @param $beneficiaryCountry
     * @param $bankAccountCountry
     * @param $metadata
     * @return object
     */
    public function update($uuid, $bankAccountCurrency, $paymentTypes, $beneficiaryType, $beneficiaryCountry, $bankAccountCountry, $metadata): object
    {
        return $this->put('beneficiaries/bank-beneficiaries/'.$uuid, [
            'bankAccountCurrency' => $bankAccountCurrency,
            'paymentTypes' => $paymentTypes,
            'beneficiaryType' => $beneficiaryType,
            'beneficiaryCountry' => $beneficiaryCountry,
            'bankAccountCountry' => $bankAccountCountry,
            'metadata' => $metadata
        ]);
    }

    /**
     * Supprimer un bénéficiaire bancaire.
     *
     * @param $uuid
     * @return object
     */
    public function destroy($uuid): object
    {
        return $this->delete('bank-beneficiaries/'.$uuid);
    }
}
