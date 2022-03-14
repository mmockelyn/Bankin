<?php

namespace Database\Seeders\Core;

use App\Models\Core\Agence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agence::create([
            "bic" => "BZHMFRPPXXX",
            "nom_agence" => "BZHM Financial E-Bank",
            "ville" => "Nantes",
            "code_banque" => "18990",
            "code_agence" => "0001",
        ]);

        Agence::create([
            "bic" => "BZHMFRPP001",
            "nom_agence" => "BZHM Financial Group Ouest",
            "ville" => "Nantes",
            "code_banque" => "18990",
            "code_agence" => "0002",
        ]);
    }
}
