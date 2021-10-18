<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Investor extends Model
{
<<<<<<< HEAD
    use HasFactory, SoftDeletes;
    protected $fillabla = [
=======
    use HasFactory,SoftDeletes;
    protected $fillable = [
>>>>>>> parent of 6255237 (Theme-Change)
        'name',
        'address',
        'phoneNo',
    ];
<<<<<<< HEAD


    /**
     * Get all of the investments for the Investor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function investments(): HasMany
    {
        return $this->hasMany(InvestmentMoney::class);
    }
=======
>>>>>>> parent of 6255237 (Theme-Change)
}
