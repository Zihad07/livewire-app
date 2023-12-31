<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpleGateHttpController;

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

Route::get('/register-done', function () {
    return ['register done'];
})->name('register.done');

// Route::get('test_mail', 'App\Http\Controllers\UserController@testMail');
Route::get('get-post', [SimpleGateHttpController::class, 'getPost']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products', function () {
    return view('product.index');
});


Route::get('/tostmessage', function () {
    return view('layouts.zapp');
});
