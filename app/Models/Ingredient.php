<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\Meal;


class Ingredient extends Model
{
    use HasFactory;
    use Translatable;

    public $timestamps = false;

    protected $hidden = [
        'translations',
        'pivot',
    ];

    protected $translatedAttributes = [
        'name',
    ];

    public function meals() {
        return $this->belongsToMany(Meal::class, 'ingredients_meals', 'ingredient_id', 'meal_id');
    }
}
