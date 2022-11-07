<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'made_at',
        'price',
        'category_id',
        'country_id',
        'currency_id',
        'user_id'
    ];
}
