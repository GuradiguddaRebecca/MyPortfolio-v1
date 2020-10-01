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

Route::get('/project', function () {
    return view('project');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//projects
Route::get('/projects/colortoggle', function(){
    return view('projects.colortoggle');
});

Route::get('projects/todolist',function(){
    return view('projects.todolist');
});

Route::get('projects/patatap2',function(){
    return view('projects.patatap2.circles');
});
Route::get('projects/quiz',function(){
    return view('projects.quiz');
});
Route::get('projects/countdown',function(){
    return view('projects.countdown');
});
Route::get('projects/recipe',function(){
    return view('projects.recipe');
});

Route::get('/projects/ecommerce',function(){
    return view('projects.ecommerce');
});

Route::get('/projects/todo',function(){
    return view('projects.Todo');
});

// Route::get('/projects/bootstrap',function(){
//     return view()
// })

Route::get('/messages','MessagesController@index');

Route::resource('message', 'MessagesController');

