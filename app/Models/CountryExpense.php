<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryExpense extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'expense_commom_id'
    ];
}
