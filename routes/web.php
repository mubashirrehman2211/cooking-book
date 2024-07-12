<?php

use App\Models;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\recipeController;


Route::get('/', function () {
    return view('home');
});
 
Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/user/authenticate',[UserController::class, 'authenticate']);

Route::get('/register',[UserController::class, 'register']);
Route::post('/user', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


Route::get('/recipe', [recipeController::class, 'index']);

Route::get('/createRecipe', [recipeController::class, 'create'])->middleware('auth');

Route::post('/Recipe', [recipeController::class, 'store'])->middleware('auth');


Route::get('/recipe/{recipe}',[recipeController::class, 'show']);
