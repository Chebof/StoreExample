<?php

// use Illuminate\Routing\Route;

// Route::get('tasks', 'TasksController@index')->name('tasks.index');

// Route::get('tasks/create', 'TasksController@create')->name('tasks.create');

// Route::post('tasks/store', 'TasksController@store')->name('tasks.store');

// Route::get('tasks/{id}/edit', 'TasksController@edit')->name('tasks.edit');

// Route::put('tasks/{id}/update', 'TasksController@update')->name('tasks.update');

// Route::get('tasks/{id}/show', 'TasksController@show')->name('tasks.show');

// Route::delete('tasks{id}/destroy','TasksController@destroy')->name('tasks.destroy');

use Illuminate\Support\Facades\Route;

Route::resource('tasks', 'TasksController');

Route::get('/', function () {
    return view('startpage');
});

Route::get('goods', 'GoodsController@index')->name('goods.index');
Route::get('goods/{id}/show', 'GoodsController@show')->name('goods.show');

// Route::get('goods/{id}/edit', 'GoodsController@edit')->name('goods.edit');
// Route::put('goods/{id}/update', 'GoodsController@update')->name('goods.update');

// Route::get('goods/create', 'GoodsController@create')->name('goods.create');
// Route::post('goods/store', 'GoodsController@store')->name('goods.store');



Route::get('services', 'ServicesController@index')->name('services.index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['create', 'show', 'store']]);
});

Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('/goods', 'GoodsController', ['except' => ['index', 'show']]);
});
