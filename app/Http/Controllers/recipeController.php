<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recipebytitles;

class recipeController extends Controller
{
    // For All Recipes
    public function index(){
        return view('Recipe.index',[
            'recipes' => recipebytitles::latest()->simplePaginate(4)
        ]);
    }

    // For single Recipe
    public function show(recipebytitles $recipe){
        return view('Recipe.show',[
            'recipe' => $recipe 
          ]);
    }

    // for Show Create Recipe Form
    public function create(){
        return view('Recipe.CreateRecipe');
    }

    // for store Recipe 
    public function store(Request $request){
       $formField = $request->validate([
         'title' => 'required',
         'categoryName' => 'required',
         'instruction' => 'required',
       ]);

       if($request->hasFile('image')){
        $formField['image'] = $request->file('image')->store('images', 'public');
       }

       recipebytitles::create($formField);

       return redirect('/recipe')->with('Success', 'Recipe Created Successfully!');
    }
}
