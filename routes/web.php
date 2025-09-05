<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app');
});
Route::view('/', 'portfolio'); // full portfolio page
Route::view('/about', 'about');
Route::view('/skills', 'skills');
Route::view('/projects', 'projects');
Route::view('/contact', 'contact');
