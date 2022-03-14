<?php

namespace App\Http\Controllers\Api\Simulate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FacilityController extends Controller
{
    /**
     * Calcul du prorata de la facilité de caisse authorisé pour le client lors de sont inscription
     * Methode de calcul: Ensemble de ces revenue / 3.65 arrondie au plus haut
     * Exemple: Revenue 1550 € | 1550.00/365 = 424.65 soit une facilité de 500 €
     *
     * @param Request $request
     */
    public function __invoke(Request $request)
    {
        return eur(round((integer) $request->income / 3.65, -2));
    }
}
