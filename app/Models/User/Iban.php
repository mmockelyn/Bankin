<?php

namespace App\Models\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iban extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function credit_cards()
    {
        return $this->hasMany(CreditCard::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
