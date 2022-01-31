<?php

namespace App\Http\Controllers;

use App\Models\Category_Recipe;
use App\Http\Requests\StoreCategory_RecipeRequest;
use App\Http\Requests\UpdateCategory_RecipeRequest;

class CategoryRecipeController extends Controller
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
     * @param  \App\Http\Requests\StoreCategory_RecipeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory_RecipeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category_Recipe  $category_Recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Category_Recipe $category_Recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category_Recipe  $category_Recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Category_Recipe $category_Recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategory_RecipeRequest  $request
     * @param  \App\Models\Category_Recipe  $category_Recipe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategory_RecipeRequest $request, Category_Recipe $category_Recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category_Recipe  $category_Recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category_Recipe $category_Recipe)
    {
        //
    }
}
