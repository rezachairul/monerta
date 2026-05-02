<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    /** @use HasFactory<\Database\Factories\IncomesFactory> */
    use HasFactory;

    protected $fillable = [
        'amount',
        'source',
        'note',
        'date',
        'image',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'date' => 'datetime',
    ];
}
