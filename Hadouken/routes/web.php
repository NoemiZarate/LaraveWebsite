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
    return view('register');
});
Route::get('/About.php', function () {
    return view('About');
});
Route::get('/Home.php', function () {
    return view('Home');
});
Route::get('/Contact.php', function () {
    return view('Contact');
});
Route::get('/validation.php', function () {
    return view('validation');
});
Route::get('/register.php', function () {
    return view('register');
});
Route::get('/validation.php', function () {
    return view('validation');
});