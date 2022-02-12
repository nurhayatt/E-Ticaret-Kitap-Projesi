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

Route::get('/', 'Front\IndexController@index')->name('index');
Route::get('/Writer/Detail/{selflink}','Front\Book\IndexController@index')->name('book.detail');
Route::get('/Basket/Add/{id}','Front\Basket\IndexController@add')->name('basket.add');
Route::get('/Basket','Front\Basket\IndexController@index')->name('basket.index');
Route::get('/Basket/Remove/{id}','Front\Basket\IndexController@remove')->name('basket.remove');
Route::get('/Basket/Complete','Front\Basket\IndexController@complete')->name('basket.compelete')->middleware(['auth']);
Route::post('/Basket/Complete','Front\Basket\IndexController@completeStore')->name('basket.compeleteStore')->middleware(['auth']);



Auth::routes(); 

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
    Route::group(['namespace' => 'Order', 'prefix' => 'Order', 'as' => 'order.'], function () {
        Route::get('/', 'IndexController@index')->name('index');
        Route::get('/Add', 'IndexController@create')->name('create');
        Route::post('/Add', 'IndexController@store')->name('create.post');
        Route::get('/Detail/{id}', 'IndexController@detail')->name('detail');
     
        Route::get('/Delete/{id}', 'IndexController@delete')->name('delete');
    });
});
 