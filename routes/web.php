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

Route::get('/createsg', [RecipeController::class, 'create']);
Route::post('/createsp', [RecipeController::class, 'store'])->name('createsp');

route::get('/editg', [RecipeController::class, 'edit']);
Route::put('/items', [RecipeController::class, 'update'])->name('updateitems');


Route::post('/loginp', [LoginController::class, 'loginPost'])->name('loginp');
Route::post('/registerp', [Registercontroller::class, 'registerPost'])->name('registerp');

route::delete('/deleter', [RecipeController::class, 'delete'])->name('deletes');

