<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/foods-list',[
    'uses'=>'WelcomeController@getFoodsList',
    'as'=>'foods.list'
]);
Route::get('/foods-search',[
    'uses'=>'WelcomeController@getSearchFoods',
    'as'=>'foods.search'
]);
Route::get('/seach-result',[
    'uses'=>'WelcomeController@getSearchResult',
    'as'=>'search.now'
]);

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categories',[
    'uses'=>'HomeController@getCategories',
    'as'=>'categories'
]);
Route::get('/new-pair',[
    'uses'=>'HomeController@getNewPair',
    'as'=>'new.pair'
]);
