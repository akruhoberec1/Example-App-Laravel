<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\IngredientTranslation;
use App\Http\Requests\StoreIngredientTranslationRequest;
use App\Http\Requests\UpdateIngredientTranslationRequest;

class IngredientTranslationController extends Controller
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
     * @param  \App\Http\Requests\StoreIngredientTranslationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIngredientTranslationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IngredientTranslation  $ingredientTranslation
     * @return \Illuminate\Http\Response
     */
    public function show(IngredientTranslation $ingredientTranslation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IngredientTranslation  $ingredientTranslation
     * @return \Illuminate\Http\Response
     */
    public function edit(IngredientTranslation $ingredientTranslation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIngredientTranslationRequest  $request
     * @param  \App\Models\IngredientTranslation  $ingredientTranslation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIngredientTranslationRequest $request, IngredientTranslation $ingredientTranslation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IngredientTranslation  $ingredientTranslation
     * @return \Illuminate\Http\Response
     */
    public function destroy(IngredientTranslation $ingredientTranslation)
    {
        //
    }
}
