<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class Meal extends Model
{
    use HasFactory, SoftDeletes;

    public function translation(){
        return $this->hasOne(Language::class)->where('locale', app()->getLocale())->withTrashed();
    }

    public function categories(){
        return $this->belongsTo(Category::class)->withTrashed();
    }

    public function tags(){
        return $this->hasMany(MealTag::class)->withTrashed();
    }

    public function ingredients(){
        return $this->hasMany(MealIngredient::class)->withTrashed();
    }


    
    /*public function scopeMealDetail($request)
    {
        return $request->with('meal:id,title,','categories:id,title','tags:id,title,slug','ingredients:id,title,slug');
    } pokušaj bezveze*/



}
