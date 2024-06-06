<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        $recipeCount = Recipe::count();
        return view('admin.recipes.dashboard', compact('recipes','recipeCount'));
    }

    public function tampil($recipe)
    {
        $recipe = Recipe::findOrFail($recipe);
        return view('layouts.detail', compact('recipe'));
    }

    public function about()
    {
        return view('layouts.about');
    }

    public function search(Request $request)
    {
        $request->validate([
            'cari' => 'required',
        ]);
        try {
            $query = strtolower($request->input('cari')); // Convert the query to lowercase

            // Perform a case-insensitive search
            $recipe = Recipe::whereRaw('LOWER(title) LIKE ?', ['%' . $query . '%'])
                             ->orWhereRaw('LOWER(description) LIKE ?', ['%' . $query . '%'])
                             ->get();
            return view('layouts.index', compact('recipe'));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function pengguna()
    {
        $recipe = Recipe::all();
        return view('layouts.index', compact('recipe'));
    }

    public function create()
    {
        return view('admin.recipes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg',
        ]);

        $recipe = new Recipe([
            'title' => $request->title,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'instructions' => $request->instructions,
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $recipe->image = $imagePath;
        }

        $recipe->save();

        return redirect('/create')->with('success', 'Recipe added successfully!');
    }

    public function edit()
    {
        $recipe = Recipe::all();
        return view('admin.recipes.edit', compact('recipe'));
    }

    public function update(Request $request, Recipe $recipe)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg',
        ]);

        $recipe->fill([
            'title' => $request->title,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'instructions' => $request->instructions,
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('recipes', 'public');
            $recipe->image = $imagePath;
        }

        $recipe->save();

        return redirect('/manage')->with('success', 'Recipe updated successfully!');
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect('/manage')->with('success', 'Recipe deleted successfully!');
    }

    public function show($recipe)
    {
        $recipe = Recipe::findOrFail($recipe);
        return view('admin.recipes.update', compact('recipe'));
    }


}
