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

// Route::get('peoplentech', function() {
//     return view('peoplentech');
// });

Route::get('peoplentech', 'peoplentechController@index');

// Route::get('peoplentech/about', function() {
//     return view('about');
// });

Route::get('peoplentech/about', 'peoplentechController@about');

Route::get('pnt/about/form', 'peoplentechController@form')->name('form');

Route::post('about/preview', 'peoplentechController@preview')->name('preview');

Route::get('/about/show', 'peoplentechController@show')->name('show');




Route::get('author/create', 'authorController@create')->name('author.create');
Route::post('author/store', 'authorController@store')->name('author.store');
Route::get('author/index', 'authorController@index')->name('author.index');
Route::get('author/edit/{id}', 'authorController@edit')->name('author.edit');
Route::put('author/edit/{id}', 'authorController@update')->name('author.update');
Route::delete('author/delete/{id}', 'authorController@destroy')->name('author.destroy');


