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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

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
            $category->translation()->save($translation);
            
            $title='Category ' . $category->id . ' title in ENG language';
            $translation=\App\Models\CategoryTranslation::factory()->create([
                'category_id'=> $category->id,
                'title'  => $title,
                'slug' => $slug,
                'locale' => 'en'
            ]);
            $category->translation()->save($translation);

            $title='Kategorietitel ' . $category->id . ' in DE Sprache';
            $translation=\App\Models\CategoryTranslation::factory()->create([
                'category_id'=> $category->id,
                'title'  => $title,
                'slug' => $slug,
                'locale' => 'de'
            ]);
            $category->translation()->save($translation);

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
            $tag->translation()->save($translation);
            
            $title='Tag ' . $tag->id . ' title in ENG language';
            $translation=\App\Models\TagTranslation::factory()->create([
                'tag_id'=> $tag->id,
                'title'  => $title,
                'slug' => $slug,
                'locale' => 'en'
            ]);
            $tag->translation()->save($translation);

            $title='Tag-titel ' . $tag->id . ' in DE Sprache';
            $translation=\App\Models\TagTranslation::factory()->create([
                'tag_id'=> $tag->id,
                'title'  => $title,
                'slug' => $slug,
                'locale' => 'de'
            ]);
            $tag->translation()->save($translation);

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
            $ingredient->translation()->save($translation);
            
            $title='Ingredient ' . $ingredient->id . ' title in ENG language';
            $translation=\App\Models\IngredientTranslation::factory()->create([
                'ingredient_id'=> $ingredient->id,
                'title'  => $title,
                'slug' => $slug,
                'locale' => 'en'
            ]);
            $ingredient->translation()->save($translation);

            $title='Tag-titel ' . $ingredient->id . ' in DE Sprache';
            $translation=\App\Models\IngredientTranslation::factory()->create([
                'ingredient_id'=> $ingredient->id,
                'title'  => $title,
                'slug' => $slug,
                'locale' => 'de'
            ]);
            $ingredient->translation()->save($translation);

        });

        \App\Models\Meal::factory(8)->create()->each(function($meal)
        {
            
            $title       = 'Naslov jela ' . $meal->id . ' na HRV jeziku';
            $description = 'Opis jela ' . $meal->id . 'na HRV jeziku';
            $translation = \App\Models\MealTranslation::factory()->create([
                'meal_id'=> $meal->id,
                'title'  => $title,
                'description' => $description,
                'locale' => 'hr'
            ]);
            $meal->translation()->save($translation);

            $title       = 'Meal ' . $meal->id . ' title in ENG language';
            $description = 'Meal ' . $meal->id . ' description in ENG language';
            $translation = \App\Models\MealTranslation::factory()->create([
                'meal_id'=> $meal->id,
                'title'  => $title,
                'description' => $description,
                'locale' => 'en'
            ]);
            $meal->translation()->save($translation);

            $category_id = rand()&20;
            $title       = 'Mahlzeit ' . $meal->id . ' Titel in DE Sprache';
            $description = 'Mahlzeit ' . $meal->id . ' Beschreibung el in DE Sprache';
            $translation = \App\Models\MealTranslation::factory()->create([
                'meal_id'=> $meal->id,
                'title'  => $title,
                'description' => $description,
                'locale' => 'de'
            ]);
            $meal->translation()->save($translation);

            \App\Models\MealTag::factory(rand(1,5))->create(
                ['meal_id' => $meal->id]
            );

            \App\Models\MealIngredient::factory(rand(1,5))->create(
                ['meal_id' => $meal->id]
            );

        });

        \App\Models\MealIngredient::factory(20)->create();
        \App\Models\MealTag::factory(20)->create();

    }
}
