<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Ingredient extends Model
{
    use HasFactory, SoftDeletes;

    public function translation()
    {
        return $this->hasOne(IngredientTranslation::class)->where('locale', app()->getLocale())->withTrashed();
    }

    public function ingredienttranslation(){
        return $this->hasOne(IngredientTranslation::class)->withTrashed();
    }

    public function meals()
    {
        return $this->belongsToMany(Meal::class, 'meal_ingredients')->withTrashed();
    }

}
