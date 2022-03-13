<?php

namespace Database\Seeders;

use App\Models\Core\CreditCardType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreditCardTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CreditCardType::create(["prefix" => 5679, "type" => "BZHM CREDIT CARD", "long" => 16]);
        CreditCardType::create(["prefix" => 5020, "type" => "Maestro (Debit Card)", "long" => 16]);
        CreditCardType::create(["prefix" => 5038, "type" => "Maestro (Debit Card)", "long" => 16]);
        CreditCardType::create(["prefix" => 6304, "type" => "Maestro (Debit Card)", "long" => 16]);
        CreditCardType::create(["prefix" => 51, "type" => "Mastercard", "long" => 16]);
        CreditCardType::create(["prefix" => 52, "type" => "Mastercard", "long" => 16]);
        CreditCardType::create(["prefix" => 53, "type" => "Mastercard", "long" => 16]);
        CreditCardType::create(["prefix" => 54, "type" => "Mastercard", "long" => 16]);
        CreditCardType::create(["prefix" => 55, "type" => "Mastercard", "long" => 16]);
        CreditCardType::create(["prefix" => 4, "type" => "Visa", "long" => 16]);
        CreditCardType::create(["prefix" => 42, "type" => "Visa", "long" => 16]);
        CreditCardType::create(["prefix" => 43, "type" => "Visa", "long" => 16]);
        CreditCardType::create(["prefix" => 46, "type" => "Visa", "long" => 16]);
        CreditCardType::create(["prefix" => 48, "type" => "Visa", "long" => 16]);
        CreditCardType::create(["prefix" => 4913, "type" => "Visa Electron", "long" => 16]);
        CreditCardType::create(["prefix" => 4917, "type" => "Visa Electron", "long" => 16]);
    }
}
