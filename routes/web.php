<?php

use Illuminate\Support\Facades\Route;
// use \App\Http\Controllers\HomeController;

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


// Route::get('/hola', function () {
//     return 'Hello World';
// });

Route::redirect('/hola', '/home');

// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
})->where('id', '[0-9]+');

Route::resource('home', \App\Http\Controllers\HomeController::class)->only([
    'index', 'show','create', 'store', 'update', 'destroy'
]);



Route::resource('alumno', \App\Http\Controllers\AlumnoController::class)->only([
    'index', 'show','create', 'store', 'edit','update', 'destroy',
]);


// Route::resource('home', \App\Http\Controllers\HomeController::class)->except([
    
// ]);