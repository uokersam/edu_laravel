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

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/dbtest', function () {
    return view('dbtest');
});

Route::get('/show', 'ShowUsers@show');

Route::get('/todo', 'ToDoListController@show');
Route::post('/createitem', 'ToDoListController@create');
Route::post('/deleteitem', 'ToDoListController@delete');

Route::match(['get', 'post'], '/getorpost', function () {
    //
});

Route::any('/foo', function () {
    return view('foo');
});

Route::get('user/{id}', function ($id) {
    return 'User' . $id;
});

Route::get('user/{id}/some/{any}', function ($id, ...$any) {
    $any = implode($any);

    return "User {$id}: <br>
            And args is {$any}";
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');