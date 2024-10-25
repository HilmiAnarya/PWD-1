<?php

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Registercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function(){
    return view('/page/profile');
});

Route::get('/login', function(){
    return view('/login_regist/login');
});

Route::get('/register', function(){
    return view('/login_regist/register');
});

Route::get('/cr', function(){
    return view('/page/create_recipe');
});

Route::get('/editform', function(){
    return view('/page/edit_recipe');
});

Route::get('/showrecipe', [RecipeController::class, 'index'])->name('showrecipe');

Route::get('/showrecipe/create', [RecipeController::class, 'create'])->name('showrecipe.create');
Route::post('/showrecipe', [RecipeController::class, 'store'])->name('showrecipe.store');

Route::put('/showrecipe/edit/{id}', [RecipeController::class, 'update'])->name('showrecipe.edit');
Route::put('/showrecipe/update', [RecipeController::class, 'update'])->name('showrecipe.update');

Route::post('/login/post', [LoginController::class, 'loginPost'])->name('login');
Route::post('/register/post', [Registercontroller::class, 'registerPost'])->name('register');

route::delete('/delete', [RecipeController::class, 'delete'])->name('delete');

