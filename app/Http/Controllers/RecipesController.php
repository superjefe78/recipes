<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    //
    public function names()
    {
        $var = Recipe::all()->pluck('name');
        return View('Recipes');
        // return Recipe::all()->pluck('name');
    }
 
    public function index()
    {
        return Recipe::all();
    }
 
    public function show($id)
    {
        return Recipe::find($id);
    }

    public function store(Request $request)
    {
        return Recipe::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Recipe::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Recipe::findOrFail($id);
        $article->delete();

        return 204;
    }
}
