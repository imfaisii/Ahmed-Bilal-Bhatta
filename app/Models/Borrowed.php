<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Borrowed extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'amount',
        'worker_id',
        'borrowed_from_id'
    ];
    public function workerDetails()
    {
        return $this->belongsTo(Worker::class, 'worker_id');
    }

    public function borrowedFrom()
    {
        return $this->belongsTo(User::class, 'borrowed_from_id');
    }
}
