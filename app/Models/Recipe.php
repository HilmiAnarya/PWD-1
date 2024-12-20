<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'img',
        'recipe_name',
        'ingredients',
        'steps',
        'creator name',
        'publish_date'
    ];

    protected $casts = [
        'ingredients' => 'array',
        'steps' => 'array',
    ];

}
