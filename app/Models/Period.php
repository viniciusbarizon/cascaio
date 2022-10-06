<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    protected $fillable = [
        'ends_at',
        'name',
        'price',
        'starts_at',
        'country_id',
        'currency_id',
        'user_id'
    ];
}
