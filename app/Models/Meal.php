<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;



class Meal extends Model
{
    use HasFactory, SoftDeletes, HasRelationships;


    public function translation(){
        return $this->hasOne(MealTranslation::class)->where('locale', app()->getLocale())->withTrashed();
    }

    public function mealtranslation(){
        return $this->hasOne(MealTranslation::class)->withTrashed();
    }

    public function category(){
        return $this->belongsTo(Category::class)->withTrashed();
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'meal_tags')->withTrashed();
    }

    public function tagtranslations(){
        return $this->hasManyDeep(TagTranslation::class, [MealTag::class, Tag::class], ['meal_id', 'id', 'tag_id']);
    }


    public function ingredients(){
        return $this->belongsToMany(Ingredient::class, 'meal_ingredients')->withTrashed();
    }

    
}
