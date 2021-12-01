<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\Meal;


class Category extends Model
{
    use HasFactory;
    use Translatable;

    public $timestamps = false;

    protected $hidden = ['translations'];

    protected $translatedAttributes = [
        'name',
    ];

    public function meals() {
        return $this->hasMany(Meal::class);
    }
}
