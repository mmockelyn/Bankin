<?php


namespace App\Service\Openpayd;

/**
 * Class Beneficiary
 * L'objet Bénéficiaires contient les coordonnées d'une entreprise externe ou d'un commerce de détail (particulier) à qui vous effectuerez des versements à partir de votre compte OpenPayd.
 * L'objet est considéré comme Parent Bénéficiaire et contient un ou plusieurs Bénéficiaires Banque.
 * @package App\Service\Openpayd
 */
class Beneficiary extends Openpayd
{
    /**
     * Obtenez une liste de tous les parents bénéficiaires filtrés par divers paramètres.
     * https://apidocs.openpayd.com/reference/list-beneficiaries
     * @param array $params
     * @return object
     */
    public function all(array $params = []): object
    {
        return $this->get('beneficiaries', $params);
    }

    /**
     * Créez un nouveau parent bénéficiaire.
     * @param $friendlyName
     * @param $companyName
     * @param $title (M., Mme, etc...)
     * @param string $tag (SELF, THIRD_PARTY)
     * @return object
     */
    public function createCorporate($friendlyName, $companyName, $title, $tag = "SELF"): object
    {
        return $this->post('beneficiaries', [
            'beneficiaryType' => "CORPORATE",
            'friendlyName' => $friendlyName,
            'companyName' => $companyName,
            'title' => $title,
            'tag' => $tag
        ]);
    }

    /**
     * Créez un nouveau parent bénéficiaire.
     * @param $friendlyName
     * @param $title (M., Mme, etc...)
     * @param $firstName
     * @param $lastName
     * @param string $tag (SELF, THIRD_PARTY)
     * @return object
     */
    public function createRetail($friendlyName, $title, $firstName, $lastName, $tag = "SELF"): object
    {
        return $this->post('beneficiaries', [
            'beneficiaryType' => "RETAIL",
            'friendlyName' => $friendlyName,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'title' => $title,
            'tag' => $tag
        ]);
    }

    /**
     * Obtenez un bénéficiaire par son UUID.
     * @param string $uuid
     * @return object
     */
    public function getter(string $uuid): object
    {
        return $this->get('beneficiaries/'.$uuid);
    }

    /**
     * Mettre à jour un bénéficiaire.
     * @param $uuid
     * @param $companyName
     * @param $friendlyName
     * @param $firstName
     * @param $lastName
     * @param $title
     * @return object
     */
    public function update($uuid, $companyName, $friendlyName, $firstName, $lastName, $title): object
    {
        return $this->put('beneficiaries/'.$uuid, [
            'companyName' => $companyName,
            'friendlyName' => $friendlyName,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'title' => $title,
        ]);
    }

    /**
     * Supprimer un bénéficiaire.
     * @param $uuid
     * @return object
     */
    public function destroy($uuid): object
    {
        return $this->delete('beneficiaries/'.$uuid);
    }
}
