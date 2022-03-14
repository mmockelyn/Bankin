<?php


namespace App\Helper\Account;


use App\Models\User;
use App\Models\User\UserAddress;
use App\Models\User\UserCivility;
use App\Models\User\UserJustify;
use App\Models\User\UserPro;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class CreateAccount
{
    public function createAccount($request)
    {
        try {
            $user = $this->createAccount($request);
            $address = $this->create_address($user, $request);
            $civility = $this->create_civility($user, $request);
            $justify = $this->create_justify($user, $request);
            $pro = $this->create_pro($user, $request);
            $subscription = $this->subscribe($user, $request);

            return $user;
        }catch (\Exception $exception) {
            return $exception;
        }
    }

    private function create_user($request)
    {
        try {
            return User::create([
                "email" => $request['email'],
                "password" => \Hash::make($request['password']),
                "step_open_account" => "STARTING",
                "tos" => true,
                "signated" => true,
                "signated_at" => now(),
                "agence_id" => 1
            ]);
        }catch (\Exception $exception) {
            return $exception;
        }
    }

    private function create_address($user, $request)
    {
        try {
            return UserAddress::create([
                "fiscal_country" => $request['fiscal_country'],
                "address" => $request['address'],
                "addressbis" => $request['addressbis'] ? $request['addressbis'] : null,
                "postal" => $request['postal'],
                "city" => $request['city'],
                "phone" => $request['phone'],
                "housing_type_id" => $request['housing_type_id'],
                "user_id" => $user->id
            ]);
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    private function create_civility($user, $request)
    {
        try {
            return UserCivility::create([
                "type_account" => "INDIVIDUAL",
                "civility" => $request['civility'],
                "birthname" => $request['birthname'],
                "martialname" => $request['martialname'],
                "name" => $request['name'],
                "bzhm_customer" => $request['bzhm_customer'] ? $request['bzhm_customer'] : null,
                "newsletter_email" => $request['newsletter_email'] ? true : false,
                "newsletter_sms" => $request['newsletter_sms'] ? true : false,
                "newsletter_phone" => $request['newsletter_phone'] ? true : false,
                "newsletter_paper" => $request['newsletter_paper'] ? true : false,
                "birthdate" => $request['birthdate'],
                "country_birth" => $request['country_birth'],
                "city_birth" => $request['city_birth'],
                "nationality" => $request['nationality'],
                "user_id" => $user->id,
            ]);
        }catch (\Exception $exception) {
            return $exception;
        }
    }

    private function create_justify($user, $request)
    {
        $this->import_document($user, $request, 'identity');
        $this->import_document($user, $request, 'address');
        $this->import_document($user, $request, 'income');
        $this->import_document($user, $request, 'signate');
        $this->import_document($user, $request, 'rib');

        try {
            return UserJustify::create([
                "justify_identity" => true,
                "justify_address" => true,
                "justify_income" => true,
                "justify_signate" => true,
                "justify_rib" => true,
                "user_id" => $user->id,
            ]);
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    private function create_pro($user, $request)
    {
        try {
            return UserPro::create([
                "pro_activity" => $request['pro_activity'] ? true: false,
                "activity_domain" => $request['activity_domain'],
                "activity_profession" => $request['activity_profession'],
                "revenue" => $request['revenue'],
                "patrimoine_immobilier" => $request['patrimoine_immobilier'],
                "patrimoine_financier" => $request['patrimoine_financier'],
                "user_id" => $user->id,
            ]);
        }catch (\Exception $exception) {
            return $exception;
        }
    }

    private function subscribe($user, $request)
    {
        try {
            $iban = $this->create_iban($user);
            $card = $this->create_card($user, $request, $iban);

            return User\UserSubscription::create([
                "user_id" => $user->id,
                "subscription_id" => $request['plan'] == 'silver' ? 1 : 2,
            ]);
        }catch (\Exception $exception) {
            return $exception;
        }
    }

    private function create_iban($user)
    {
        $generator = new IbanGenerator();
        try {
            return $generator->generate(10, $user);
        }catch (\Exception $exception) {
            return $exception;
        }
    }

    private function create_card($user, $request, $iban)
    {
        $generator = new CreditCardGenerator();
        try {
            return $generator->generate($user, $request, $iban);
        }catch (\Exception $exception) {
            return $exception;
        }
    }

    private function import_document($user, $request, $type)
    {
        switch ($type) {
            case 'identity':
                try {
                    \Storage::putFileAs('/storage/account/'.$user->id.'/document/', $request->file('justify_identity'), 'justify_identity.'.$request->file('justify_identity')->getClientOriginalExtension());
                }catch (FileException $exception) {
                    return $exception;
                }
                break;

            case 'address':
                try {
                    \Storage::putFileAs('/storage/account/'.$user->id.'/document/', $request->file('justify_address'), 'justify_address.'.$request->file('justify_address')->getClientOriginalExtension());
                }catch (FileException $exception) {
                    return $exception;
                }
                break;

            case 'income':
                try {
                    \Storage::putFileAs('/storage/account/'.$user->id.'/document/', $request->file('justify_income'), 'justify_income.'.$request->file('justify_income')->getClientOriginalExtension());
                }catch (FileException $exception) {
                    return $exception;
                }
                break;

            case 'signate':
                try {
                    \Storage::putFileAs('/storage/account/'.$user->id.'/document/', $request->file('justify_signate'), 'justify_signate.'.$request->file('justify_signate')->getClientOriginalExtension());
                }catch (FileException $exception) {
                    return $exception;
                }
                break;

            case 'rib':
                try {
                    \Storage::putFileAs('/storage/account/'.$user->id.'/document/', $request->file('justify_rib'), 'justify_rib.'.$request->file('justify_rib')->getClientOriginalExtension());
                }catch (FileException $exception) {
                    return $exception;
                }
                break;
        }
    }
}
