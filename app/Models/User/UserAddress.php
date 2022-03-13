<?php

namespace App\Models\User;

use App\Models\Core\HousingType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function housing()
    {
        return $this->belongsTo(HousingType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
