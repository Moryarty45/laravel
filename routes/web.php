<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NewsController;
use \App\Http\Controllers\LoginController;

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

Route::get('/login', [
    'uses' => '\App\Http\Controllers\LoginController@index'
]);

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', [
    'uses' => '\App\Http\Controllers\NewsController@index'
]);

Route::get('/news/card/{id}', [NewsController::class, 'newsCard'])
    ->name('news-card')
    ->where('id', '[0-9]+');

Route::get('/news/category/{id}', [NewsController::class, 'newsCategory'])
->name('news-category')
->where('id', '[0-9]+');


/**
 * Админка новостей
 */
Route::group([
    'prefix' => '/admin/news',
    'as' => 'admin::news::',
    'namespace' => '\App\Http\Controllers\Admin'
], function () {
    Route::get('/', 'NewsController@index')
        ->name('index');
    Route::get('/create', 'NewsController@create')
        ->name('create');
    Route::get('/update', 'NewsController@update')
        ->name('update');
});

