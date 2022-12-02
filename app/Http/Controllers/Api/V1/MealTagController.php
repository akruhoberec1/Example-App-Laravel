<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\MealTag;
use App\Http\Requests\StoreMealTagRequest;
use App\Http\Requests\UpdateMealTagRequest;

class MealTagController extends Controller
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
     * @param  \App\Http\Requests\StoreMealTagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMealTagRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MealTag  $mealTag
     * @return \Illuminate\Http\Response
     */
    public function show(MealTag $mealTag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MealTag  $mealTag
     * @return \Illuminate\Http\Response
     */
    public function edit(MealTag $mealTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMealTagRequest  $request
     * @param  \App\Models\MealTag  $mealTag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMealTagRequest $request, MealTag $mealTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MealTag  $mealTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(MealTag $mealTag)
    {
        //
    }
}
