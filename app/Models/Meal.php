<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meal extends Model
{
    use HasFactory, SoftDeletes;

    public function translation(){
        return $this->hasOne(MealTranslation::class)->where('locale', app()->getLocale())->withTrashed();
    }

    public function categories(){
        return $this->belongsTo(Category::class)->withTrashed();
    }

    public function tags(){
        return $this->belongsTo(MealTag::class)->withTrashed();
    }

    public function ingredients(){
        return $this->belongsTo(MealIngredient::class)->withTrashed();
    }

}
