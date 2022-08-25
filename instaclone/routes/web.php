<?php

use App\Http\Controllers\postController;
use App\Http\Controllers\profileController;
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

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');



Route::get('/profile/{id}', [profileController::class, 'show'])->where(['id' => '[0-9]+'])->name('profile.show');
Route::get('/post/create', [postController::class, 'create'])->name('posts.create');
Route::get('/post', [postController::class, 'store'])->name('posts.store');
