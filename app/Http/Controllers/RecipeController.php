<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('/page/recipe', ['recipes' => $recipes]);
    }

    public function create()
    {
        return view('recipes.create');
    }

    public function edit($id)
    {
        $recipes = recipe::find($id);
        return view('recipes.edit', ['recipes' => $recipes]);
    }
    public function store(Request $request)
    {
        $create = Recipe::create($request->all());
        dd($create);
        return redirect()->route('showrecipe');
    }

    public function delete()
    {
        $finddel = Recipe::find('id');
        $finddel->delete();
        return view('showrecipe');
    }

    public function update(Request $request)
    {
        $item = Recipe::find($request->id);

        $item->recipe_name = $request->input('recipe_name');
        $item->description = $request->input('description');
        $item->img = $request->input('img');

        $item->update();

        return redirect('showrecipe');
    }
}
