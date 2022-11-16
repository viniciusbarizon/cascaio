<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CountryLanguage extends Pivot
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'country_id',
        'language_id',
    ];
}
