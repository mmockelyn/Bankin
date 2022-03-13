<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Generator;
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
        $faker = new Generator();
        $user = User::query()->create([
            'email' => $faker->email,
            'password' => \Hash::make('password'),
            'agent' => 0,
            'step_open_account' => "ACCEPTED",
            'tos' => true,
            'signated' => true,
            'signated_at' => now()->subDays(rand(2,365)),
        ]);

        $user = $user->latest();
    }
}
