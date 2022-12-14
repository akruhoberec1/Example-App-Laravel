<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes;

    public function translation()
    {
        return $this->hasOne(TagTranslation::class)->where('locale', app()->getLocale())->withTrashed();
    }

    public function meals()
    {
        return $this->belongsTo(MealTag::class)->withTrashed();
    }
}
