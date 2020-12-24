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

Route::get('/getindexpagetable/', 'LearnAjaxController@indexpagetable')->name('ajax.indexpagetable');
Route::any('/remove/{id}', 'LearnAjaxController@remove')->name('ajax.remove');

Route::resource('ajax','LearnAjaxController');
Route::resource('js','JsController');

