<?php

use Illuminate\Support\Facades\Route;
use App\Article;
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
    $dataArticle = Article::latest()->paginate(3);
    if(auth()->user()){
        return redirect('/home');
    }
    return view('/blogPage',compact('dataArticle'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout','Auth\LoginController@logout');
Route::get('/profile', 'ProfileController@edit');
Route::patch('/profile/{profile}' , 'ProfileController@update');
Route::get('/articles', 'ArticlesController@index');
Route::get('/create', 'ArticlesController@create');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::delete('/article/{article}', ['as' => 'article.delete', 'uses' => 'ArticlesController@destroy']);
Route::get('/article/{article}/edit', ['as' => 'article.edit', 'uses' => 'ArticlesController@edit']);
Route::patch('/article/{article}',  'ArticlesController@update');
