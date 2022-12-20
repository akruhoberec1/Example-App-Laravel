<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\TagTranslation;
use App\Http\Resources\V1\TagTranslationResource;
use App\Http\Requests\StoreTagTranslationRequest;
use App\Http\Requests\UpdateTagTranslationRequest;
use Illuminate\http\Request;

class TagTranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $taggs = TagTranslation::all();
        //return $tags;

        return TagTranslationResource::collection($taggs);
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
     * @param  \App\Http\Requests\StoreTagTranslationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagTranslationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TagTranslation  $tagTranslation
     * @return \Illuminate\Http\Response
     */
    public function show(TagTranslation $tagTranslation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TagTranslation  $tagTranslation
     * @return \Illuminate\Http\Response
     */
    public function edit(TagTranslation $tagTranslation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTagTranslationRequest  $request
     * @param  \App\Models\TagTranslation  $tagTranslation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagTranslationRequest $request, TagTranslation $tagTranslation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TagTranslation  $tagTranslation
     * @return \Illuminate\Http\Response
     */
    public function destroy(TagTranslation $tagTranslation)
    {
        //
    }
}
