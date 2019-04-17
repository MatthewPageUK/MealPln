<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::orderBy('sortorder')->get();
        return view('meal.index', compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meal.create');
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
            'sortorder' => 'required|max:255',
        ]);
        $meal = Meal::create($validatedData);
        return redirect('/meals')->with('success', 'Meal was successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $meal = Meal::findOrFail($id);
        return view('meal.show', compact('meal'));
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
        $meal = Meal::findOrFail($id);
        return view('meal.edit', compact('meal'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meal = Meal::findOrFail($id);
        //$recipe->ingredients()->detach();
        //$recipe->delete();
        return redirect('/meals')->with('success', 'Meal was successfully deleted');
    }
}
