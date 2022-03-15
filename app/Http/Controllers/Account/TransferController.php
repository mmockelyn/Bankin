<?php

namespace App\Http\Controllers\Account;

use App\Helper\Account\Wallet;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\Transfert\TransferRequest;
use App\Models\Core\BankTransfer;
use Bavix\Wallet\Models\Transaction;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function index()
    {
        return view('account.transfer.index');
    }

    public function create(Request $request)
    {
        if($request->has('amount')) {
            $amount = $request->get('amount');

            return view('account.transfer.create', compact('amount'));
        } else {
            return view('account.transfer.create');
        }
    }

    public function store(TransferRequest $request)
    {
        $wallet = new Wallet();
        try {
            $transfer = BankTransfer::create($request->all());

            if($request->get('transfer_type') == 0) {
                $wallet->createTransaction($request->user()->id,$request->user()->wallet->id, 'transfer', $request->get('amount'), $request->get('transfer_reason'), 'Virement Bancaire', 0, $request->get('transfer_reason').' '.$request->get('transfer_reference'));
                Toastr::success("Votre virement à été éxecuter");
                return redirect()->back();
            } elseif ($request->get('transfer_type') == 1) {
                $wallet->createTransaction($request->user()->id,$request->user()->wallet->id, 'transfer', $request->get('amount'), $request->get('transfer_reason'), 'Virement Bancaire', 0, $request->get('transfer_reason').' '.$request->get('transfer_reference'), $request->get('transfer_date'));
                Toastr::success("Votre virement à été programmer pour le ".$request->get('transfer_date'));
                return redirect()->back();
            } else {
                $wallet->createTransaction($request->user()->id,$request->user()->wallet->id, 'transfer', $request->get('amount'), $request->get('transfer_reason'), 'Virement Bancaire', 0, $request->get('transfer_reason').' '.$request->get('transfer_reference'), $request->get('recurring_start'));
                Toastr::success("Votre virement permanent à bien été pris en compte");
                return redirect()->back();
            }
        }catch (\Exception $exception) {
            Toastr::error("Erreur lors de la création de votre virement.");
            return redirect()->back()->with('error', "Erreur lors de la création de votre virement.");
        }
    }

    public function history()
    {
        $user = \request()->user();

        return view('account.transfer.history', compact('user'));
    }
}
