<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayOption extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function currency()
    {
        return $this->hasOne(Currency::class, "id", "currencies");
    }
}
