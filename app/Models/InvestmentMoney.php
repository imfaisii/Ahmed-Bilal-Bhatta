<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentMoney extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'user_id',
        'investor_id'
    ];

    public function investor()
    {
        return $this->belongsTo(Investor::class, 'investor_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
