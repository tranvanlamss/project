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

Route::get('/auth', 'App\Http\Controllers\LoginController@create')->name('auth.create');
Route::post('/auth', 'App\Http\Controllers\LoginController@store')->name('auth.store');
Route::get('/auth', 'App\Http\Controllers\LoginController@add')->name('auth.add');
Route::post('/auth', 'App\Http\Controllers\LoginController@post')->name('auth.post');

Route::get('/home', function () {
    return view('home');
});


Route::prefix('admin')->group(function () {
    Route::prefix('categories')->group(function () {

        Route::get('/', [
            'as' => 'categories.index',
            'uses' =>'App\Http\Controllers\CategoryController@index'
            ]);

            Route::get('/create', [
                'as' => 'categories.create',
                'uses' =>'App\Http\Controllers\CategoryController@create'
            ]);

            Route::post('/store', [
                'as' => 'categories.store',
                'uses' =>'App\Http\Controllers\CategoryController@store'
            ]);

            Route::get('/edit', [
                'as' => 'categories.edit',
                'uses' =>'App\Http\Controllers\CategoryController@edit'
            ]);

            Route::get('/delete', [
                'as' => 'categories.delete',
                'uses' =>'App\Http\Controllers\CategoryController@delete'
            ]);    
    });

    Route::prefix('menus')->group(function () {

        Route::get('/', [
            'as' => 'menus.index',
            'uses' =>'App\Http\Controllers\MenuController@index'
        ]);

        Route::get('/create', [
            'as' => 'menus.create',
            'uses' =>'App\Http\Controllers\MenuController@create'
        ]);

        Route::post('/store', [
            'as' => 'menus.store',
            'uses' =>'App\Http\Controllers\MenuController@store'
        ]);

        Route::get('/edit', [
            'as' => 'menus.edit',
            'uses' =>'App\Http\Controllers\MenuController@edit'
        ]);

        Route::get('/delete', [
            'as' => 'menus.delete',
            'uses' =>'App\Http\Controllers\MenuController@delete'
        ]);
    });


    Route::prefix('products')->group(function () {

        Route::get('/', [
            'as' => 'products.index',
            'uses' =>'App\Http\Controllers\ProductController@index'
        ]);

        Route::get('/create', [
            'as' => 'products.create',
            'uses' =>'App\Http\Controllers\ProductController@create'
        ]);

        Route::post('/store', [
            'as' => 'products.store',
            'uses' =>'App\Http\Controllers\ProductController@store'
        ]);

        Route::get('/edit', [
            'as' => 'products.edit',
            'uses' =>'App\Http\Controllers\ProductController@edit'
        ]);

        Route::get('/delete', [
            'as' => 'products.delete',
            'uses' =>'App\Http\Controllers\ProductController@delete'
        ]);
    });


    Route::prefix('bills')->group(function () {

        Route::get('/', [
            'as' => 'bills.index',
            'uses' =>'App\Http\Controllers\BillController@index'
        ]);

        Route::get('/create', [
            'as' => 'bills.create',
            'uses' =>'App\Http\Controllers\BillController@create'
        ]);

        Route::post('/store', [
            'as' => 'bills.store',
            'uses' =>'App\Http\Controllers\BillController@store'
        ]);

        Route::get('/edit', [
            'as' => 'bills.edit',
            'uses' =>'App\Http\Controllers\BillController@edit'
        ]);

        Route::get('/delete', [
            'as' => 'bills.delete',
            'uses' =>'App\Http\Controllers\BillController@delete'
        ]);
    });


    Route::prefix('users')->group(function () {

        Route::get('/', [
            'as' => 'users.index',
            'uses' =>'App\Http\Controllers\UserController@index'
        ]);

        Route::get('/create', [
            'as' => 'users.create',
            'uses' =>'App\Http\Controllers\UserController@create'
        ]);

        Route::post('/store', [
            'as' => 'users.store',
            'uses' =>'App\Http\Controllers\UserController@store'
        ]);

        Route::get('/edit', [
            'as' => 'users.edit',
            'uses' =>'App\Http\Controllers\UserController@edit'
        ]);

        Route::get('/delete', [
            'as' => 'users.delete',
            'uses' =>'App\Http\Controllers\UserController@delete'
        ]);
    });

    Route::prefix('news')->group(function () {

        Route::get('/', [
            'as' => 'news.index',
            'uses' =>'App\Http\Controllers\NewController@index'
        ]);

        Route::get('/create', [
            'as' => 'news.create',
            'uses' =>'App\Http\Controllers\NewController@create'
        ]);

        Route::post('/store', [
            'as' => 'news.store',
            'uses' =>'App\Http\Controllers\NewController@store'
        ]);

        Route::get('/edit', [
            'as' => 'news.edit',
            'uses' =>'App\Http\Controllers\NewController@edit'
        ]);

        Route::get('/delete', [
            'as' => 'news.delete',
            'uses' =>'App\Http\Controllers\NewController@delete'
        ]);
    });
});


