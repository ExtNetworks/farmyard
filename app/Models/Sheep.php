<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sheep extends Model
{
    use HasFactory;

    public int $minCount = 0;
    public string $sound = 'Baaaa baaa';

    protected $casts = [
        'amount' => 'integer',
        'count' => 'integer',
    ];
}
