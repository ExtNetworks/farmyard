<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    use HasFactory;

    public int $minCount = 0;

    protected $casts = [
        'amount' => 'integer'
    ];
}
