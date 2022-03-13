<?php

namespace App\Models\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    public function iban()
    {
        return $this->belongsTo(Iban::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
