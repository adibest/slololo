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
Route::get('/article', function () {
    return view('page.article');
})->name('article');
Route::get('/about-us', function () {
    return view('page.about');
})->name('about');
Route::get('/advertising', function () {
    return view('page.advertising');
})->name('advertising');
Route::get('/contribute', function () {
    return view('page.contribute');
})->name('contribute');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
