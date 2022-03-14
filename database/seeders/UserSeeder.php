<?php

namespace Database\Seeders;

use App\Helper\Account\CivilityEnum;
use App\Helper\Account\CreditCardGenerator;
use App\Helper\Account\IbanGenerator;
use App\Models\Core\Agence;
use App\Models\Core\Subscription;
use App\Models\User;
use Faker\Generator;
use Illuminate\Container\Container;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Container::getInstance()->make(Generator::class);
        $ibanGen = new IbanGenerator();
        $ccGenerator = new CreditCardGenerator();

        User::create([
            'email' => $faker->email,
            'password' => \Hash::make('password'),
            'agent' => 0,
            'step_open_account' => "ACCEPTED",
            'tos' => true,
            'signated' => true,
            'signated_at' => now()->subDays(rand(2,365)),
            'agence_id' => Agence::first()->id
        ]);

        $user = User::query()->first();

        $address = User\UserAddress::create([
            "fiscal_country" => "France",
            "address" => "4 Rue du Coundray",
            "postal" => "44000",
            "city" => "Nantes",
            "phone" => "+33749061225",
            "housing_type_id" => 2,
            "user_id" => $user->id
        ]);

        $ci = ["M", "MME"];
        $ci_rand = array_rand($ci, 1);

        $civility = User\UserCivility::create([
            "type_account" => "INDIVIDUAL",
            "civility" => $ci[rand(0,1)],
            "birthname" => $faker->lastName,
            "martialname" => rand(0,1) == 1 ? $faker->lastName : null,
            "name" => $ci[rand(0,1)] == 'M' ? $faker->firstNameMale : $faker->firstNameFemale,
            "bzhm_customer" => $faker->boolean,
            "newsletter_email" => $faker->boolean,
            "newsletter_sms" => $faker->boolean,
            "newsletter_phone" => $faker->boolean,
            "newsletter_paper" => $faker->boolean,
            "birthdate" => now(),
            "country_birth" => "France",
            "city_birth" => $faker->city,
            "nationality" => $faker->country,
            "user_id" => $user->id
        ]);

        $justify = User\UserJustify::create([
            "justify_identity" => true,
            "justify_address" => true,
            "justify_income" => true,
            "justify_signate" => true,
            "justify_rib" => true,
            "user_id" => $user->id
        ]);

        /*$pro = $faker->boolean;

        $act_domain = ["Cadre", "Employé de commerce", "Employé administratif", "Gérant, Président, assimilé, etc..."];
        $pro = User\UserPro::create([
            "pro_activity" => $pro,
            "activity_domain" => $act_domain[rand(0,3)],
            "activity_profession" => $faker->words(rand(2,6)),
            "revenue" => rand(1000,10000),
            "patrimoine_immobilier" => rand(1,999999999),
            "patrimoine_financier" => rand(1,999999999),
            "user_id" => $user->id
        ]);*/

        $iban = $ibanGen->generate(10, $user);
        $card = $ccGenerator->generate($user, ['debit_type' => "differ", "payment_limit" => 1200, "withdraw_limit" => 700], $iban);

        $plan = ["silver", "gold"];
        $c_plan = array_rand($plan, 1);
        $subscription = User\UserSubscription::create([
            "user_id" => $user->id,
            "subscription_id" => $plan[rand(0,1)] == 'silver' ? 1 : 2,
        ]);

        $wallet = $user->createWallet([
            'name' => "Compte ".CivilityEnum::render('type_account', $civility->type_account),
            'slug' => \Str::slug("Compte ".CivilityEnum::render('type_account', $civility->type_account)),
            'meta' => [
                'iban' => $iban->iban,
                'card' => $card->number,
                'credit' => 500
            ]
        ]);

        $wallet->deposit(100, ["designation" => "Dépot d'espèce ".$user->agence->nom_agence]);

    }
}
