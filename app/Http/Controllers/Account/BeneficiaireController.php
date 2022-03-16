<?php

namespace App\Http\Controllers\Account;

use App\Helper\Account\CivilityEnum;
use App\Helper\Account\IbanGenerator;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\Transfert\BeneficiaireRequest;
use App\Models\User\Iban;
use App\Models\User\UserBeneficiary;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class BeneficiaireController extends Controller
{
    public function index(Request $request)
    {
        return view('account.transfer.beneficiaire.index');
    }

    public function store(BeneficiaireRequest $request)
    {
        $check = IbanGenerator::info($request->get('iban'));
        if($request->has('incumbent')) {
            $generator = new IbanGenerator();
            $generator->generate(10, $request->user(), $request->user()->agence->code_banque, $request->user()->agence->code_agence);
            $iban = Iban::all()->last();

            auth()->user()->createWallet([
                'name' => "Compte ".CivilityEnum::render('type_account', $request->user()->civility->type_account),
                'slug' => \Str::slug("Compte secondaire (".$request->get('name').") ".CivilityEnum::render('type_account', $request->user()->civility->type_account)),
                'meta' => [
                    'iban' => $request->get('iban'),
                    'card' => null,
                    'credit' => 0
                ],
                'iban_id' => $iban->id
            ]);
        }
        try {
            $beneficiaire = UserBeneficiary::create([
                "iban" => $request->get('iban'),
                'bic' => $check->data->bank->bic ? $check->data->bank->bic : $request->user()->agence->bic,
                'banque' => $check->data->bank->bank_name ? $check->data->bank->bank_name : $request->user()->agence->nom_agence,
                'user_id' => $request->user()->id,
                'name' => $request->get('name')
            ]);

            return response()->json($beneficiaire);
        }catch (\Exception $exception) {
            return response()->json($exception);
        }
    }
}
