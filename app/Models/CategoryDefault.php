<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryDefault extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'language_id'
    ];
}