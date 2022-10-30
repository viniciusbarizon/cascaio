<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{
    Factories\HasFactory,
    Relations\Pivot
};

class CountryExpenseCommon extends Pivot
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'country_id',
        'expense_commom_id'
    ];
}
