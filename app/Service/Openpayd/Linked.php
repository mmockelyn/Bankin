<?php


namespace App\Service\Openpayd;


use Carbon\Carbon;

/**
 * Class Linked
 * @package App\Service\Openpayd
 */
class Linked extends Openpayd
{
    /**
     * @param $type (INDIVIDUAL or BUSINESS)
     * @param $friendlyName
     * @param $firstname
     * @param $lastname
     * @param $date_birth
     * @param $email
     * @param $address
     * @param $city
     * @param $postal
     * @param $country 2 characters (FR,EN,etc...)
     * @param null $middlename
     * @param null $addressbis
     * @param null $state
     * @param null $phone
     * @param null $type_id (PASSPORT, DRIVERS_LICENSE, NATIONAL_ID, OTHER)
     * @param null $number_id
     * @param array|null $metadata
     * @return object
     */
    public function createIndividual($type, $friendlyName, $firstname, $lastname, $date_birth, $email, $address, $city, $postal, $country, $middlename = null, $addressbis = null, $state = null, $phone = null, $type_id = null, $number_id = null, array $metadata = null)
    {
        $basic = [
            'clientType' => \Str::upper($type),
            'friendlyName' => $friendlyName,
        ];


        return $this->post('linkedClient', [
            $basic,
            "individual" => [
                'firstName' => $firstname,
                'middleName' => $middlename,
                'lastName' => $lastname,
                'address' => [
                    'addressLine1' => $address,
                    'addressLine2' => $addressbis,
                    'city' => $city,
                    'state' => $state,
                    'postCode' => $postal,
                    'country' => $country
                ],
                'dateOfBirth' => Carbon::createFromTimestamp(strtotime($date_birth))->format('Y-m-d'),
                'email' => $email,
                'phone' => $phone,
                'identificationType' => $type_id,
                'identificationValue' => $number_id,
            ],
            'metadata' => $metadata
        ]);
    }

    /**
     * @param $type (INDIVIDUAL or BUSINESS)
     * @param $friendlyName
     * @param $companyName
     * @param $companyType
     * @param $registrationNumber
     * @param $address
     * @param $city
     * @param $postal
     * @param $country 2 characters (FR,EN,etc...)
     * @param $contactName
     * @param $email
     * @param $phone
     * @param null $addressbis
     * @param null $state
     * @param null $industrySectorType
     * @param null $industrySectorValue
     * @param array|null $metadata
     * @return object
     */
    public function createBusiness($type, $friendlyName, $companyName, $companyType, $registrationNumber, $address, $city, $postal, $country, $contactName, $email, $phone, $addressbis = null, $state = null, $industrySectorType = null, $industrySectorValue = null, array $metadata = null)
    {
        $basic = [
            'clientType' => \Str::upper($type),
            'friendlyName' => $friendlyName,
        ];


        return $this->post('linkedClient', [
            $basic,
            "company" => [
                'companyName' => $companyName,
                'companyType' => $companyType,
                'registrationNumber' => $registrationNumber,
                'registeredAddress' => [
                    'addressLine1' => $address,
                    'addressLine2' => $addressbis,
                    'city' => $city,
                    'state' => $state,
                    'postCode' => $postal,
                    'country' => $country
                ],
                'tradingAddress' => [
                    'addressLine1' => $address,
                    'addressLine2' => $addressbis,
                    'city' => $city,
                    'state' => $state,
                    'postCode' => $postal,
                    'country' => $country
                ],
                'contactName' => $contactName,
                'email' => $email,
                'phone' => $phone,
                'industrySectorType' => $industrySectorType,
                'industrySectorValue' => $industrySectorValue
            ],
            'metadata' => $metadata
        ]);
    }
}
