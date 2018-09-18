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

Route::get('/posts', 'PostsController@index');

Route::get('/post/{post}', function () {
    return view('welcome');
});
