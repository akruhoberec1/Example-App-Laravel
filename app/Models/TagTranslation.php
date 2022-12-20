<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class TagTranslation extends Model
{
    use HasFactory, SoftDeletes, HasRelationships;

    public function tag(){
        return $this->belongsTo(Tag::class)->withTrashed();
    }

    public function meals(){
        return $this->hasManyDeep(Meal::class, [Tag::class, 'tag_id','meal_id'])->withTrashed;
    }

}
