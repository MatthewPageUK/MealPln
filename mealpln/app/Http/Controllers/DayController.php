<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Day;
use App\Recipe;
use App\Meal;

class DayController extends Controller
{
    public function addRecipe(Request $request, $id)
    {
        $validatedData = $request->validate([
            'recipe' => 'required|max:255', 
            'meal' => 'required|max:255', 
        ]);

        $recipe = Recipe::findOrFail($validatedData['recipe']);
        $meal = Meal::findOrFail($validatedData['meal']);

        // attach to recipe?
        \DB::table('meal_recipe')->insert([
            'meal_id' => $validatedData['meal'], 
            'recipe_id' => $validatedData['recipe'],
            'day_id' => $id,
        ]);

        return redirect()
            ->action('DayController@show', ['id' => $id])
            ->with('success', 'Recipe was successfully added');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $days = Day::orderBy('sortorder')->get();
        return view('day.index', compact('days'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $day = Day::findOrFail($id);
        $allRecipes = Recipe::orderBy('name')->get();
        return view('day.show', compact('day', 'allRecipes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
