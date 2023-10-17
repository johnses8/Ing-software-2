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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/cortadoradecesped', function () {
    return view('cortadoradecesped');
});
Route::get('/kitdeherramientas', function () {
    return view('kitdeherramientas');
});
Route::get('/shop-single', function () {
    return view('shop-single');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/shopseccion2', function () {
    return view('shopseccion2');
});
Route::get('/contact', function () {
    return view('contact');
});