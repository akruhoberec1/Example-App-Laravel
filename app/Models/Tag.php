<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes;

    public function translations()
    {
        return $this->hasOne(TagTranslation::class)->where('locale', app()->getLocale())->withTrashed();
    }
    
/*     public function tagtranslation(){
        return $this->hasOne(TagTranslation::class, 'tag_id', 'id')->withTrashed();
    } */

    public function meals()
    {
        return $this->belongsToMany(Meal::class, 'meal_tags')->withTrashed();
    } 
}
