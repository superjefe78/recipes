<?php
// use DB;
use Illuminate\Support\Facades\DB;
use App\Ingredient;
use App\Recipe;
use App\RecipeIngredient;
use App\ShoppingList;
use Illuminate\Support\Facades\Log;
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

    // 1 time crete a non existing table in preexisting db
    // Schema::create('books', function($newtable){
    //     $newtable->increments('id');
    //     $newtable->string('writer');
    //     $newtable->string('title', 500);
    //     $newtable->text('description');
    //     $newtable->date('published');
    //     $newtable->integer('copies');
    //     $newtable->timestamps();
    // });

    // add fields to a pre existing table in preexisting db
    // Schema::table('books', function($mytable){
    //     $mytable->boolean('in store');
    //     //remove column
    //     $mytable->dropColumn('copies');
    // });

    return view('welcome');
});

Route::get('category', function(){
    return 'Hello world we are in categories';
});
Route::get('category/sf', function(){
    return 'Hello world we are in categories sf';
});

Route::get('category/{parameter1}', function($parameter1){
    return 'Hello world we are in categories. The number is ' . $parameter1;
});

Route::get('swampy/{parameter1?}', function($parameter1){
    return "Hello world we are in swaps. The number is {$parameter1}";
});

Route::get('goodtimes', function(){
    return view('badtimes');
});

Route::get('recipes', function(){
//     $users = DB::select('select * from users where active = ?', [1]);
     $recipes = DB::select('select * from ingredients where 1');

        // return view('user.index', ['users' => $users]);
    // return $recipes[0]->name;
    return view('recipes', ['recipe1' => $recipes[0]->name]);
});

Route::get('/posts', 'PostsController@index');

Route::get('/post/{post}', function () {
    return view('welcome');
});
Route::get('ingredientnames', 'IngredientController@names');
Route::get('ingredientsall', 'IngredientController@index');

Route::get('ingredientlist', function () {
    $var1 = Ingredient::all();
    return view('ingredients', ['var1' => $var1]);
});
Route::get('recipelist', function () {
    $var1 = Recipe::all();
    return view('recipes', ['var1' => $var1]);
});
Route::get('recipeIngredients/{id}', function ($id) {
    $var1 = Recipe::find($id);
    $var2 = RecipeIngredient::where('recipe_id',$id)
    ->join('ingredients','ingredients.id','recipe_ingredients.ingredient_id')
    ->get();
    $var3 = Ingredient::all();
    // return $var1;
    // return $var2;
    // return $var3;
    return view('recipeIngredients', ['var1' => $var1,'var2' => $var2,'var3' => $var3]);
});
Route::get('addrecipeIngredients/{id}', function ($id) {
$recipe = RecipeIngredient::where('recipe_id',9)->get();
Log::info("Hello there".$id);
return "hello";
});
Route::get('shoppinglist', function () {
    $var1 = ShoppingList::all();
    return view('shopping', ['var1' => $var1]);
});


