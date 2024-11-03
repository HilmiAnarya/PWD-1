<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $data = $request->validate([
            'img' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'recipe_name' => 'required|string|max:255',
            'ingredients' => 'required|array',
            'ingredients.*.name' => 'required|string|max:255',
            'steps' => 'required|array',
            'steps.*.description' => 'required|string'
        ]);

        // Store the image with its original filename in the 'images' directory
        $image = $request->file('img');
        $originalName = date('Y-m-d').$image->getClientOriginalName();
        $imagePath = $image->storeAs('images', $originalName, 'public');

        // Update the 'img' field in the data array with the stored path
        $data['img'] = $imagePath;

        // Create the Recipe instance with validated data
        $create = Recipe::create($data);

//        dd($create); // Inspect the created recipe object

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

        $item->img = $request->input('img');
        $item->recipe_name = $request->input('recipe_name');
        $item->ingredients = $request->input('ingredients');
        $item->step_by_step = $request->input('steps');

        $item->update();

        return redirect('showrecipe');
    }
}
