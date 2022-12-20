<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use app\Http\Resources\V1\CategoryResource;

class CategoryTranslation extends Model
{
    use HasFactory, SoftDeletes;

    public function category(){
       return $this->belongsTo(Category::class)->withTrashed();
    }
}
