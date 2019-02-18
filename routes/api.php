<?php

use Illuminate\Http\Request;
use App\Ingredient;
use App\Recipe;
use App\CookingUtensils as Utensil;
use App\RecipeIngredient;
use App\ShoppingList;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 
Route::get('ingredients', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Ingredient::all();
});

Route::get('recipes', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Recipe::all();
});

Route::get('utensils', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Utensil::all();
});
 
Route::get('ingredients/{id}', function($id) {
    return Ingredient::find($id);
});

Route::post('ingredients', function(Request $request) {
    return Ingredient::create($request->all);
});

Route::put('ingredients/{id}', function(Request $request, $id) {
    $article = Ingredient::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('ingredients/{id}', function($id) {
    Ingredient::find($id)->delete();

    return 204;
});

Route::get('recipeingredient', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return RecipeIngredient::all();
});
 
Route::get('recipeingredient/{id}', function($id) {
    return RecipeIngredient::find($id);
});

Route::post('recipeingredient', function(Request $request) {
    return RecipeIngredient::create($request->all);
});

Route::put('recipeingredient/{id}', function(Request $request, $id) {
    $article = RecipeIngredient::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('recipeingredient/{id}', function($id) {
    RecipeIngredient::find($id)->delete();

    return 204;
});