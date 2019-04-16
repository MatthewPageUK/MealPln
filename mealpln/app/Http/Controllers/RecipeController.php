<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\Ingredient;

class RecipeController extends Controller
{
    /**
     * Delete an ingredient from this recipe
     * 
     */
    public function deleteIngredient(Request $request, $id)
    {
        $validatedData = $request->validate([
            'ingredient' => 'required|numeric|min:1',
        ]);
        $recipe = Recipe::findOrFail($id);
        $recipe->ingredients()->wherePivot('ingredient_id', '=', $validatedData['ingredient'])->detach();

        return redirect()->action(
            'RecipeController@show', ['id' => $id]
        )->with('success', 'Ingredient was successfully deleted');
    }
    /**
     * Add an ingredient to the recipe
     * 
     */
    public function addIngredient(Request $request, $id)
    {
        $validatedData = $request->validate([
            'ingredient' => 'required|numeric|min:1',
            'quantity' => 'required|numeric|min:0.1',
        ]);
        $recipe = Recipe::findOrFail($id);
        $recipe->ingredients()->attach($validatedData['ingredient'], ['quantity' => $validatedData['quantity']]);

        return redirect()->action(
            'RecipeController@show', ['id' => $id]
        )->with('success', 'Ingredient was successfully added');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::orderBy('name')->get();
        return view('recipe.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        $recipe = Recipe::create($validatedData);
        return redirect('/recipes')->with('success', 'Recipe was successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        $allIngredients = Ingredient::orderBy('name')->get();
        return view('recipe.show', compact('recipe', 'allIngredients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        $allIngredients = Ingredient::orderBy('name')->get();
        return view('recipe.edit', compact('recipe', 'allIngredients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        Recipe::whereId($id)->update($validatedData);
        return redirect('/recipes')->with('success', 'Recipe was successfully saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipe = Recipe::findOrFail($id);
        $recipe->ingredients()->detach();
        $recipe->delete();
        return redirect('/recipes')->with('success', 'Recipe was successfully deleted');
    }
}
