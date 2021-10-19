<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expense extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'khata_type_id',
        'comments'
    ];
    /**
     * Get all of the khatatypes for the Expense
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function khatatypes(): HasMany
    {
        return $this->hasMany(KhataType::class, 'khata_type_id');
    }
}
