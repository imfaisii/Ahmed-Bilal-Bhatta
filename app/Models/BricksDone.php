<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BricksDone extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'total_bricks',
        'rate',
        'round_number',
        'season',
        'worker_id'
    ];

    /**
     * Get the worker that owns the BricksDone
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function worker(): BelongsTo
    {
        return $this->belongsTo(Worker::class, 'worker_id');
    }
}
