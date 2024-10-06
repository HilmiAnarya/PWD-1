<?php

use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recipe', function(){
    return view('/page/recipe');
});

Route::get('/profile', function(){
    return view('/page/profile');
});

Route::get('/login', function(){
    return view('/login_regist/login');
});

Route::get('register', function(){
    return view('/login_regist/register');
});

Route::get('cr', function(){
    return view('/page/create_recipe');
});

Route::get('creates', [RecipeController::class, 'index']);

Route::get('/creates/create', [RecipeController::class, 'create']);
Route::post('/creates/create', [RecipeController::class, 'store']);
