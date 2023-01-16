<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    public function translations()
    {
        return $this->hasOne(CategoryTranslation::class)->where('locale', app()->getLocale())->withTrashed();
    }

    public function meals()
    {    
        return $this->hasOne(Meal::class);
    }

}