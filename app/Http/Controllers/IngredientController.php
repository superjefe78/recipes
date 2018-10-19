<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;

class IngredientController extends Controller
{
    //
    // public function index()
    // {
    //     return view('ingredients');
    // }

    public function names()
    {
        $var = Ingredient::all()->pluck('name');
        return View('ingredients');
        // return Ingredient::all()->pluck('name');
    }
 
    public function index()
    {
        return Ingredient::all();
    }
 
    public function show($id)
    {
        return Ingredient::find($id);
    }

    public function store(Request $request)
    {
        return Ingredient::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Ingredient::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Ingredient::findOrFail($id);
        $article->delete();

        return 204;
    }
}
