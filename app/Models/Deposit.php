<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function payOption()
    {
        return $this->belongsTo(PayOption::class, "pay_options_id");
    }
}
