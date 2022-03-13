<?php

namespace Database\Seeders;

use Database\Seeders\Core\AgenceSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AgenceSeeder::class);
        $this->call(CreditCardTypeSeeder::class);
        $this->call(HousingTypeSeeder::class);
        $this->call(SubscriptionSeeder::class);
    }
}
