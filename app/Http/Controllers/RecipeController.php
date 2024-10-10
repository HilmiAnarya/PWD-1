<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RecipeController extends Controller
{
    public function index(){
<<<<<<< HEAD
        $recipes = Recipe::all();
        return view('/page/recipe', compact('recipes'));
=======
        $recipes = Re5cipe::all();
        return view('recipe', compact('recipes'));
>>>>>>> 6673eac9e2560c35d1052efe2eace983ed7c39dc
    }

    public function create(){
        return view('recipes.create');

    }
    public function store(Request $request){
        $create = Recipe::create($request->all());
        dd($create);
        return redirect()->route('/recipe');
    }
}
