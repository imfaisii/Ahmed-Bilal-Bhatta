<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expense extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'amount',
        'comments',
        'khata_type_id',
        'user_id',
    ];
    /**
     * Get all of the khatatypes for the Expense
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function khatatypes(): HasMany
    {
        return $this->hasMany(KhataType::class, 'id', 'khata_type_id');
    }

    /**
     * Get the user that owns the Expense
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
