<?php

namespace App\Models;

use App\Models\Core\Agence;
use App\Models\Core\BankTransfer;
use App\Models\Core\Subscription;
use App\Models\User\CreditCard;
use App\Models\User\Iban;
use App\Models\User\UserAccount;
use App\Models\User\UserAddress;
use App\Models\User\UserBeneficiary;
use App\Models\User\UserCivility;
use App\Models\User\UserJustify;
use App\Models\User\UserPro;
use App\Models\User\UserSubscription;
use Bavix\Wallet\Interfaces\Customer;
use Bavix\Wallet\Interfaces\Wallet;
use Bavix\Wallet\Traits\CanConfirm;
use Bavix\Wallet\Traits\CanPay;
use Bavix\Wallet\Traits\HasWallet;
use Bavix\Wallet\Traits\HasWallets;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Lab404\AuthChecker\Interfaces\HasLoginsAndDevicesInterface;
use Lab404\AuthChecker\Models\HasLoginsAndDevices;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements Wallet,HasLoginsAndDevicesInterface
{
    use HasApiTokens, HasFactory, Notifiable, HasWallet, HasLoginsAndDevices, HasWallets, CanConfirm;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'addressbis',
        'postal',
        'city',
        'country',
        'phone'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function credit_cards()
    {
        return $this->hasMany(CreditCard::class);
    }

    public function ibans()
    {
        return $this->hasMany(Iban::class);
    }

    public function civility()
    {
        return $this->hasOne(UserCivility::class);
    }

    public function address()
    {
        return $this->hasOne(UserAddress::class);
    }

    public function pro()
    {
        return $this->hasOne(UserPro::class);
    }

    public function document()
    {
        return $this->hasOne(UserJustify::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(UserSubscription::class);
    }

    public function account()
    {
        return $this->hasOne(UserAccount::class);
    }

    public function agence()
    {
        return $this->belongsTo(Agence::class);
    }

    public function beneficiaries()
    {
        return $this->hasMany(UserBeneficiary::class);
    }

    public function ben_transfers()
    {
        return $this->hasMany(BankTransfer::class);
    }



}
