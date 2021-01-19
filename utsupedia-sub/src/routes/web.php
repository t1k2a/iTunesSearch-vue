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

Route::get('HelloWorld', function () {
    return view('HelloWorld');
});

Route::get('/', function () {
    return redirect('/pedia');
});

Route::resource('pedia', 'EncyclopediaController');
Route::post('pediaUpdate', 'EncyclopediaController@update');

Route::resource('column', 'ColumnController');
Route::post('columnUpdate', 'ColumnController@update');

Route::get('session', 'SessionController@ses_get');
Route::post('session', 'SessionController@ses_put');

Route::get('sendContact', 'Contact@notification');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
