<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invester extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillabla =[
        'name',
        'address',
        'phoneNo',
    ];
}
