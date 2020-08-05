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

Route::get('/home', function () {
    return view('welcome');
});


Route::get('/', "TodoController@hello");

Route::get('/welcome', "TodoController@welcome");



// Route::get('/todos', 'TodoController@index')->name('todos.index');

// Route::get('/todos/create', 'TodoController@create')->name('todos.create');

// Route::post('/todos', 'TodoController@store')->name('todos.store');

// Route::get('/todos/{todo}', 'TodoController@show')->name('todos.show');

// Route::delete('todos/{todo}', 'TodoController@destroy')->name('todos.destroy');

// Route::get('/todos/{todo}/edit', 'TodoController@edit')->name('todos.edit');

// Route::put('/todos/{todo}', 'TodoController@update')->name('todos.update');


// or the shortcut way

Route::resource('/todos', 'TodoController');