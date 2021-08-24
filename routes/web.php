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

Route::get('/',[\App\Http\Controllers\Controller:: class, 'show']);
Route::get('form',[\App\Http\Controllers\Controller:: class, 'showForm']);
Route::post('register',[\App\Http\Controllers\Controller:: class, 'store']);


//route:: POST for form along with GET



