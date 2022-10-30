<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{
    Factories\HasFactory,
    Relations\Pivot
};

class CountryLanguage extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'language_id'
    ];
}
