<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{
    Factories\HasFactory,
    Relations\Pivot
};

class CategoryDefaultCountryCommon extends Pivot
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'country_id',
        'category'
    ];
}
