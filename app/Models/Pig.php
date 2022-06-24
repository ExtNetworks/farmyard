<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pig extends Model
{
    use HasFactory;

    public int $minCount = 2;
    public string $sound = 'Oink oink';

    protected $casts = [
        'amount' => 'integer',
        'count' => 'integer',
    ];
}
