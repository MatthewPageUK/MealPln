<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('recipes/{recipe}/addingredient', 'RecipeController@addIngredient')->name('recipes.addingredient');
Route::post('recipes/{recipe}/deleteingredient', 'RecipeController@deleteIngredient')->name('recipes.deleteingredient');
Route::post('days/{day}/addrecipe', 'DayController@addRecipe')->name('days.addrecipe');


Route::resource('ingredients', 'IngredientController');
Route::resource('recipes', 'RecipeController');
Route::resource('meals', 'MealController');
Route::resource('days', 'DayController');