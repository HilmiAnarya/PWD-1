<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index(){
        $recipes = Recipe::all();
        return view('recipe', compact('recipes'));
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
