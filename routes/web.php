<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

/*Route::get('/', function () {
    return view('index');
})->name('index');

Route::prefix('/login')->group(function () {
    Route::get('/', 'Auth\LoginController@index');
    Route::post('/', 'Auth\LoginController@login')->name('login');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::prefix('/Singup')->group(function () {
    Route::get('/', 'SingUpController@index')->name('singup.index');
    Route::post('/', 'SingUpController@singup')->name('singup.store');
});*/

 Route::group(['namespace'=>'Admin', 'prefix'=>'Admin', 'as'=>'admin.'], function(){
    Route::get('/', 'IndexController@index')->name('index');

    Route::group(['namespace'=>'Publisher' , 'prefix'=> 'Publisher', 'as'=> 'publisher.'], function(){
        Route::get('/', 'IndexController@index')->name('index');
        Route::get('/Add', 'IndexController@create')->name('create');
        Route::post('/Add', 'IndexController@store')->name('create.post');
        Route::get('/Edit/{id}', 'IndexController@edit')->name('edit');
        Route::post('/Edit/{id}', 'IndexController@update')->name('edit.post');
        Route::get('/Delete/{id}', 'IndexController@delete')->name('delete');
    });
    Route::group(['namespace' => 'Writer', 'prefix' => 'Writer', 'as' => 'writer.'], function () {
        Route::get('/', 'IndexController@index')->name('index');
        Route::get('/Add', 'IndexController@create')->name('create');
        Route::post('/Add', 'IndexController@store')->name('create.post');
        Route::get('/Edit/{id}', 'IndexController@edit')->name('edit');
        Route::post('/Edit/{id}', 'IndexController@update')->name('edit.post');
        Route::get('/Delete/{id}', 'IndexController@delete')->name('delete');
    });
    Route::group(['namespace' => 'Book', 'prefix' => 'Book', 'as' => 'book.'], function () {
        Route::get('/', 'IndexController@index')->name('index');
        Route::get('/Add', 'IndexController@create')->name('create');
        Route::post('/Add', 'IndexController@store')->name('create.post');
        Route::get('/Edit/{id}', 'IndexController@edit')->name('edit');
        Route::post('/Edit/{id}', 'IndexController@update')->name('edit.post');
        Route::get('/Delete/{id}', 'IndexController@delete')->name('delete');
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'Category', 'as' => 'category.'], function () {
        Route::get('/', 'IndexController@index')->name('index');
        Route::get('/Add', 'IndexController@create')->name('create');
        Route::post('/Add', 'IndexController@store')->name('create.post');
        Route::get('/Edit/{id}', 'IndexController@edit')->name('edit');
        Route::post('/Edit/{id}', 'IndexController@update')->name('edit.post');
        Route::get('/Delete/{id}', 'IndexController@delete')->name('delete');
    });
});
 