<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Returned extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'amount',
        'returned_to_id',
        'worker_id'
    ];

    public function workerDetails()
    {
        return $this->belongsTo(Worker::class, 'worker_id');
    }

    public function returnedTo()
    {
        return $this->belongsTo(User::class, 'returned_to_id');
    }
}
