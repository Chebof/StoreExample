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
    return view('store.startpage');
});

Route::get('/goods', 'GoodsController@index')->name('goodsIndex');
Route::get('/services', 'ServicesController@index')->name('servicesIndex');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['create', 'show', 'store']]);
});
