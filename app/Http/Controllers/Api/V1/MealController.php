<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Meal;
use App\Http\Requests\StoreMealRequest;
use App\Http\Requests\UpdateMealRequest;
use Illuminate\http\Request;;
use App\Http\Resources\V1\MealResource;
use App\Repositories\MealRepository;
use App\Http\Requests\mealIndex;


class MealController extends Controller
{

    protected $mealRepository;

    public function __construct(MealRepository $mealRepository){
        $this->mealRepository = $mealRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(mealIndex $request)
    {
        $meals = $this->mealRepository->search($request);
        return MealResource::collection($meals);
        
        //$meals = Meal::with('translations','category.translations','tags.translations','ingredients.translations')->paginate(5);

        //return $meals;
/*         $meals = Meal::when($request->has('with_tags'), function($query){
            return $query->with(['tags.translations']);
        })->when($request->has('with_ingredients'), function($query){
            return $query->with(['ingredients.translations']);
        })->when($request->has('with_category'), function($query){
            return $query->with(['category.translations']);
        })->paginate(5);

        return MealResource::collection($meals);
        */
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
     * @param  \App\Http\Requests\StoreMealRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMealRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        return new MealResource($meal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMealRequest  $request
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMealRequest $request, Meal $meal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        //
    }
}
