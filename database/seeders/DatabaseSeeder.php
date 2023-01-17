<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     

        \App\Models\Language::factory()->create([
            'title' => 'Hrvatski',
            'locale' => 'hr'
        ]);

        \App\Models\Language::factory()->create([
            'title' => 'English',
            'locale' => 'en'
        ]);

        \App\Models\Language::factory()->create([
            'title' => 'Deutsch',
            'locale' => 'de'
        ]);


        \App\Models\Category::factory(20)->create()->each(function($category){
            
            $slug='Kategorija-' . $category->id;
            $title='Naziv kategorije ' . $category->id . ' na HRV jeziku';
            $translation=\App\Models\CategoryTranslation::factory()->create([
                'category_id'=> $category->id,
                'title'  => $title,
                'slug' => $slug,
                'locale' => 'hr'
            ]);
            $category->translations()->save($translation);
            
            $title='Category ' . $category->id . ' title in ENG language';
            $translation=\App\Models\CategoryTranslation::factory()->create([
                'category_id'=> $category->id,
                'title'  => $title,
                'slug' => $slug,
                'locale' => 'en'
            ]);
            $category->translations()->save($translation);

            $title='Kategorietitel ' . $category->id . ' in DE Sprache';
            $translation=\App\Models\CategoryTranslation::factory()->create([
                'category_id'=> $category->id,
                'title'  => $title,
                'slug' => $slug,
                'locale' => 'de'
            ]);
            $category->translations()->save($translation);

        });


        \App\Models\Tag::factory(60)->create()->each(function($tag){

            $slug='Tag-' . $tag->id;
            $title='Naziv taga ' . $tag->id . ' na HRV jeziku';
            $translation=\App\Models\TagTranslation::factory()->create([
                'tag_id'=> $tag->id,
                'title'  => $title,
                'slug' => $slug,
                'locale' => 'hr'
            ]);
            $tag->translations()->save($translation);
            
            $title='Tag ' . $tag->id . ' title in ENG language';
            $translation=\App\Models\TagTranslation::factory()->create([
                'tag_id'=> $tag->id,
                'title'  => $title,
                'slug' => $slug,
                'locale' => 'en'
            ]);
            $tag->translations()->save($translation);

            $title='Tag-titel ' . $tag->id . ' in DE Sprache';
            $translation=\App\Models\TagTranslation::factory()->create([
                'tag_id'=> $tag->id,
                'title'  => $title,
                'slug' => $slug,
                'locale' => 'de'
            ]);
            $tag->translations()->save($translation);

        });


        \App\Models\Ingredient::factory(80)->create()->each(function($ingredient){

            $slug='Sastojak-' . $ingredient->id;
            $title='Naziv sastojka ' . $ingredient->id . ' na HRV jeziku';
            $translation=\App\Models\IngredientTranslation::factory()->create([
                'ingredient_id'=> $ingredient->id,
                'title'  => $title,
                'slug' => $slug,
                'locale' => 'hr'
            ]);
            $ingredient->translations()->save($translation);
            
            $title='Ingredient ' . $ingredient->id . ' title in ENG language';
            $translation=\App\Models\IngredientTranslation::factory()->create([
                'ingredient_id'=> $ingredient->id,
                'title'  => $title,
                'slug' => $slug,
                'locale' => 'en'
            ]);
            $ingredient->translations()->save($translation);

            $title='Titel der Zutat ' . $ingredient->id . ' auf Deutsch';
            $translation=\App\Models\IngredientTranslation::factory()->create([
                'ingredient_id'=> $ingredient->id,
                'title'  => $title,
                'slug' => $slug,
                'locale' => 'de'
            ]);
            $ingredient->translations()->save($translation);

        });

        \App\Models\Meal::factory(8)->create()->each(function($meal)
        {
            
            $title       = 'Naslov jela ' . $meal->id . ' na HRV jeziku';
            $description = 'Opis jela ' . $meal->id . ' na HRV jeziku';
            $translation = \App\Models\MealTranslation::factory()->create([
                'meal_id'=> $meal->id,
                'title'  => $title,
                'description' => $description,
                'locale' => 'hr'
            ]);
            $meal->translations()->save($translation);

            $title       = 'Meal ' . $meal->id . ' title in ENG language';
            $description = 'Meal ' . $meal->id . ' description in ENG language';
            $translation = \App\Models\MealTranslation::factory()->create([
                'meal_id'=> $meal->id,
                'title'  => $title,
                'description' => $description,
                'locale' => 'en'
            ]);
            $meal->translations()->save($translation);

            $category_id = rand()&20;
            $title       = 'Gerichtname ' . $meal->id . ' auf DE Sprache';
            $description = 'Beschreibung von Gericht ' . $meal->id . ' auf DE Sprache';
            $translation = \App\Models\MealTranslation::factory()->create([
                'meal_id'=> $meal->id,
                'title'  => $title,
                'description' => $description,
                'locale' => 'de'
            ]);
            $meal->translations()->save($translation);

            \App\Models\MealTag::factory(rand(1,5))->create(
                ['meal_id' => $meal->id]
            );

            \App\Models\MealIngredient::factory(rand(1,5))->create(
                ['meal_id' => $meal->id]
            );

        });

    }
}
