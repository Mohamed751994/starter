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

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


// Socialite FB

Route::get('/redirect/{service}', 'SocialController@redirectfb');
Route::get('/callback/{service}', 'SocialController@callback');











Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
  Route::get('/articles', 'ArticleController@index')->name('articles.index');
  Route::get('/articles/create', 'ArticleController@create')->name('articles.create');
  Route::get('/articles/{article}', 'ArticleController@show')->name('articles.show');
  Route::get('/articles/edit/{article}', 'ArticleController@edit')->name('articles.edit');

});
Route::post('/articles/store', 'ArticleController@store')->name('articles.store');
Route::put('/articles/{article}', 'ArticleController@update')->name('articles.update');
