<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\MealIngredient;
use App\Http\Requests\StoreMealIngredientRequest;
use App\Http\Requests\UpdateMealIngredientRequest;

class MealIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreMealIngredientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMealIngredientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MealIngredient  $mealIngredient
     * @return \Illuminate\Http\Response
     */
    public function show(MealIngredient $mealIngredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MealIngredient  $mealIngredient
     * @return \Illuminate\Http\Response
     */
    public function edit(MealIngredient $mealIngredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMealIngredientRequest  $request
     * @param  \App\Models\MealIngredient  $mealIngredient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMealIngredientRequest $request, MealIngredient $mealIngredient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MealIngredient  $mealIngredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(MealIngredient $mealIngredient)
    {
        //
    }
}
