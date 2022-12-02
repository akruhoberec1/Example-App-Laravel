<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\MealTranslation;
use App\Http\Requests\StoreMealTranslationRequest;
use App\Http\Requests\UpdateMealTranslationRequest;
use App\Http\Resources\V1\MealTranslationResource;
use App\Http\Resources\V1\MealTranslationCollection;
use Illuminate\http\Request;
use App\Services\V1\MealTranslationQuery;

class MealTranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new MealTranslationQuery();
        $queryItems = $filter -> transform($request);

        if(count($queryItems) == 0){
            return new MealTranslationCollection(MealTranslation::paginate());
        }else{
            return new MealTranslationCollection(MealTranslation::where($queryItems)->paginate());
        }

        MealTranslation::where($queryItems);
    
        return new MealTranslationCollection(MealTranslation::paginate());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMealTranslationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMealTranslationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MealTranslation  $mealTranslation
     * @return \Illuminate\Http\Response
     */
    public function show(MealTranslation $mealstranslation)
    {
        return new MealTranslationResource($mealstranslation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MealTranslation  $mealTranslation
     * @return \Illuminate\Http\Response
     */
    public function edit(MealTranslation $mealTranslation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMealTranslationRequest  $request
     * @param  \App\Models\MealTranslation  $mealTranslation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMealTranslationRequest $request, MealTranslation $mealTranslation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MealTranslation  $mealTranslation
     * @return \Illuminate\Http\Response
     */
    public function destroy(MealTranslation $mealTranslation)
    {
        //
    }
}
