<?php

namespace App\Models\User;

use App\Models\User;
use Bavix\Wallet\Interfaces\Wallet;
use Bavix\Wallet\Traits\HasWallet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBeneficiary extends Model implements Wallet
{
    use HasFactory, HasWallet;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
