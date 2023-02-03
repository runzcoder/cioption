<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function investmentType()
    {
        return $this->belongsTo(InvestmentType::class, "investment_type_id");
    }
}
