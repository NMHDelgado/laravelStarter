<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        return view('Categories.listCategory', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Categories.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name|string',
            'description' => 'nullable|max:100'
        ]);
        Categories::create($request->all());
        return redirect()->route('list-category')->with('succes', 'Categorie was successful added');
    }


    /**
     * Display the specified resource.
     */
    // public function show(Categories $categories)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if(!is_numeric($id)){
            return redirect()->back()->with('fail', 'Unauthorize action');
        }
        $category = Categories::find($id);
        if($category){
            return view('Categories.editCategory', compact('category'));
        }
        return redirect()->back()->with('fail', 'Category does not exist');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $category)
    {
        $request->validate([
            'name' => "required|string|unique:categories,name,$category->id",
            'description' => 'nullable|max:100'
        ]);

        $category->update($request->all());
        return redirect()->route('list-category')->with('Succes', 'Category was successful update');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (!is_numeric($id)) {
            return redirect()->back()->with('fail', 'Cette action ne peut etre faite');
        }

        $category = Categories::find($id);
        
        if($category){
            $category->delete();
            return redirect()->route('list-category')->with('warning', 'Category '.$category->name.' was successful delete');
        }
        return redirect()->back()->with('fail', 'Category does not exist');

    }
}