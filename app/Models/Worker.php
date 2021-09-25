<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Alexmg86\LaravelSubQuery\Traits\LaravelSubQueryTrait;

class Worker extends Model
{
    use HasFactory, SoftDeletes, LaravelSubQueryTrait;
    protected $fillable = [
        'name', 'address', 'phoneNo', 'peshgi', 'borrowed_amount', 'cnic', 'returned_amount', 'image'
    ];

    public function khata()
    {
        return $this->hasMany(WorkerKhaata::class);
    }

    public function borrowed_amounts()
    {
        return $this->hasMany(Borrowed::class);
    }

    public function returned_amounts()
    {
        return $this->hasMany(Returned::class);
    }
}
