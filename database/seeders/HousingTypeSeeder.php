<?php

namespace Database\Seeders;

use App\Models\Core\HousingType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HousingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HousingType::create(["type" => "Hebergement Gratuit"]);
        HousingType::create(["type" => "Locataire"]);
        HousingType::create(["type" => "Propriétaire"]);
    }
}
