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
    return view('bootstrap');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//projects
Route::get('/colortoggle', function(){
    return view('colortoggle');
});

Route::get('/todolist',function(){
    return view('todolist');
});

Route::get('/patatap',function(){
    return view('patatap2.circles');
});
Route::get('/quiz',function(){
    return view('quiz');
});
Route::get('/countdown',function(){
    return view('countdown');
});
