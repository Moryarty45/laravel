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
})->name('home');

/**
 * Новости
 */

Route::group([
   'prefix' => 'news',
   'as' => 'news::',
], function () {
    Route::get('/',  [NewsController::class, 'index'])
        ->name('categories');

    Route::get('/card/{id}', [NewsController::class, 'newsCard'])
        ->name('card')
        ->where('id', '[0-9]+');

    Route::get('/{categoryId}', [NewsController::class, 'list'])
        ->name('list')
        ->where('categoryId', '[0-9]+');
});

Route::get('/login', [
    'uses' => '\App\Http\Controllers\LoginController@index'
]);

Route::get('/about', function () {
    return view('about');
});

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

