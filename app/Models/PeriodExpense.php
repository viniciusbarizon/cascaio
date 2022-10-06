<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodExpense extends Model
{
    use HasFactory;

    protected $fillable = [
        'has_pais',
        'expense_id',
        'period_id'
    ];
}
