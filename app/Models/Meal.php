<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;



class Meal extends Model
{
    use HasFactory, SoftDeletes, HasRelationships;


    public function translations(){
        return $this->hasOne(MealTranslation::class)->where('locale', app()->getLocale())->withTrashed();
    }

    public function category(){
        return $this->belongsTo(Category::class)->withTrashed();
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'meal_tags')->withTrashed();
    }

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class, 'meal_ingredients')->withTrashed();
    }

    public function scopeGetDiffTime($query, $data){
        $query->when(!empty($data['diff_time']), function($query) use ($data) {
            $query->withTrashed();
        });
    }

    // ovaj parametar može imati vrijednost NULL kao vrijednost !NULL gdje postoji kategorija, provjera istog uvjeta

    public function scopeCheckCategories($query, $data)
    {
        $query->when(!empty($data['category']), function($query) use ($data)
        {
            $query->where(function ($query) use ($data){
                if(is_numeric($data['category'])){
                    $query->where('category_id', $data['category']);
                }elseif(strtoupper($data['category']) == 'NULL'){
                    $query->whereNull('category_id');
                }elseif(strtoupper($data['category_id']) == '!NULL'){
                    $query->whereNotNull('category_id');
                }
            });
        });
    }

    //lista id po kojima želimo filtrirati rezultate. Vratiti samo jela koja imaju sve navedene tagove

    public function scopeCheckTags($query, $data)
    {
        $query->when(!empty($data['tags']), function($query) use ($data) {
            $query->where(function ($query) use ($data) {
                $query->whereHas('tags', function ($query) use ($data){
                    $tags = $data['tags'];
                    $query->whereIn('tag_id', $tags);
                    $query->havingRaw('COUNT(tag_id) = ?', [count($tags)]);
                });
            });
        });
    }

    //lista ključnih riječi kojima dajemo do znanja koje dodatne podatke očekujemo u responsu

    public function scopeCheckWith($query, $data)
    {
        $query->with(['translations']);
        $query->when(!empty($data['with']), function($query) use ($data) {
            $relations = preg_filter('/$/', '.translations', $data['with']);
            $query->with($relations);
        });
    }
    
}
