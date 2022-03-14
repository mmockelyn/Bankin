<?php

namespace App\Http\Controllers\Api\Simulate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoSubscriptionController extends Controller
{
    /**
     * Importe les données relative à la souscription
     *
     * @param Request $request
     */
    public function __invoke(Request $request)
    {
        //dd($request->all());
        $arr = [];

        if($request->plan == 'silver') {
            $arr[] = [
                "contract_durability" => "1 AN",
                "contract_effect" => "Immédiate",
                "contract_retract" => "14 jours calendaires à compter de la date de conclusion du contrat",
                "contract_switch_offert" => "5,90 € TTC",
                "card" => [
                    "type" => "silver",
                    "label" => "Carte ".config('app.name')." Silver",
                    "sub" => "Fourniture d'une carte de débit",
                    "debit_type" => "Débit Immédiat",
                    "plafond" => [
                        "payment" => [
                            "durability" => "30 Jours",
                            "amount" => 1200,
                        ],
                        "withdraw" => [
                            "durability" => "7 Jours",
                            "amount" => 500
                        ],
                    ],
                ],
                "facility" => null
            ];
        } else {
            $arr[] = [
                "contract_durability" => "Indéterminé",
                "contract_effect" => "Immédiate",
                "contract_retract" => "14 jours calendaires à compter de la date de conclusion du contrat",
                "contract_switch_offert" => "1,90 € TTC, le 1er changement est offert",
                "card" => [
                    "type" => "gold",
                    "label" => "Carte ".config('app.name')." Gold avec Assurance & Assistance incluse",
                    "sub" => "Fourniture d'une carte de débit ".$request->debit_type == 'differ' ? '(Carte de paiement Internationnal à débit différé)' : null,
                    "debit_type" => $request->debit_type == 'immediat' ? "Débit Immédiat à autorisation systématique" : "Débit Différé",
                    "plafond" => [
                        "payment" => [
                            "durability" => "30 Jours",
                            "amount" => (integer) number_format(round($request->income / 1.21, -2), 0, ',', ' '),
                        ],
                        "withdraw" => [
                            "durability" => "7 Jours",
                            "amount" => (integer) number_format(round($request->income / 2.21, -2), 0, ',', ' '),
                        ],
                    ],
                ],
                "facility" => [
                    "amount" => (integer) round((integer) $request->income / 3.65, -2),
                    "nominal_tax" => (integer) round((integer) $request->income / 3.65, -2) <= 1000 ? 9.98 : 12.32,
                    "taeg" => 21.07,
                ]
            ];
        }

        return response()->json($arr[0]);
    }
}
