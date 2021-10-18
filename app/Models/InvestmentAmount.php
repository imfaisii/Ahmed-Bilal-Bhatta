<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvestmentAmount extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'amount',
        'received_by',
        'investor_id'
    ];

    public function investorDetails()
    {
        return $this->belongsTo(Invester::class, 'investor_id');
    }
}
