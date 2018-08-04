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

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile');

Route::get('/control', 'HomeController@control');

Route::post('{user}', 'HomeController@update');

Route::get('pages', 'pagecontroller@show');
Route::post('pages/pagestor', 'pagecontroller@store');

Route::get('pages/{page}/delete', 'pagecontroller@delete');
Route::get('pages/{page}/deleteall', 'pagecontroller@deleteall');


Route::get('pages/{page}', 'pagecontroller@onepage');

Route::post('pages/{page}/notesstore', 'notecontroller@store');


Route::get('notes/{note}/edit', 'notecontroller@edit');

Route::post('notes/{note}/update', 'notecontroller@update');

Route::get('notes/{note}/delete', 'notecontroller@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
