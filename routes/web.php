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
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\PagesController::class, 'home']);

Route::get('/login', [App\Http\Controllers\PagesController::class, 'login']);

Route::get('/register', [App\Http\Controllers\PagesController::class, 'register']);

Route::get('/category', [App\Http\Controllers\PagesController::class, 'category']);

Route::get('/category/alam', [App\Http\Controllers\CategoryController::class, 'alam']);

Route::get('/category/kerajinan', [App\Http\Controllers\CategoryController::class, 'kerajinan']);

Route::get('/category/pendidikan', [App\Http\Controllers\CategoryController::class, 'pendidikan']);

Route::get('/category/religi', [App\Http\Controllers\CategoryController::class, 'religi']);

Route::get('/category/sejarah', [App\Http\Controllers\CategoryController::class, 'sejarah']);

Route::get('posts/show', [App\Http\Controllers\PostsController::class, 'show']);