<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Tag;


class Meal extends Model
{
    use HasFactory;
    use Translatable;
    use SoftDeletes;


    public $timestamps = true;


    protected $hidden = ['translations', 'created_at', 'updated_at', 'deleted_at'];

    protected $translatedAttributes = [
        'name',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function ingredients() {
        return $this->belongsToMany(Ingredient::class, 'ingredients_meals', 'meal_id', 'ingredient_id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'tags_meals', 'meal_id', 'tag_id');
    }

}
