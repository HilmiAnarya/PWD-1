<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RecipeController extends Controller
{
    public function index(){
        $recipes = Recipe::all();
        return view('/page/recipe', compact('recipes'));
    }

    public function create(){
        return view('recipes.create');

    }

    public function edit(){
        return view('recipes.edit');
    }
    public function store(Request $request){
        $create = Recipe::create($request->all());
        dd($create);
        return redirect()->route('/recipe');
    }

    public function delete(){
        $finddel = Recipe::find('id');
        $finddel->delete();
        return view('/page/profile');
    }

    public function update(Request $request, $id)
    {
        $item = Recipe::find($id);
        $item->recipe_name = $request->input('recipe_name');
        $item->description = $request->input('description');
        $item->img = $request->input('img');

        return redirect('/page/profile');
    }
}
