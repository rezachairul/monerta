<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    /** @use HasFactory<\Database\Factories\ExpensesFactory> */
    use HasFactory;

    const CATEGORIES = [
        'food' => 'Makanan & Minuman',
        'transport' => 'Transportasi',
        'shopping' => 'Belanja',
        'bills' => 'Tagihan',
        'health' => 'Kesehatan & Skincare',
        'entertainment' => 'Hiburan',
        'education' => 'Pendidikan',
        'other' => 'Lainnya',
    ];

    protected $fillable = [
        'amount',
        'description',
        'category',
        'image',
        'note',
        'date',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'date' => 'datetime',
    ];
}
