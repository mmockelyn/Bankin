<?php

namespace Database\Seeders;

use App\Models\Core\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subscription::query()->create([
            'name' => "Convention Silver",
            'price' => 0,
            'type' => "RECURRING",
            'color' => 'primary'
        ]);

        Subscription::query()->create([
            'name' => "Convention Gold",
            'price' => 9.99,
            'type' => "RECURRING",
            'color' => 'warning'
        ]);
    }
}
