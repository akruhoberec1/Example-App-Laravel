<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MealTag extends Model
{
    use HasFactory, SoftDeletes;

    public function meals()
    {
        $this->hasMany(Meal::class, 'meal_id')->withTrashed();
    }

    public function tags()
    {
        $this->hasMany(Tag::class, 'tag_id')->withTrashed();
    }
}
