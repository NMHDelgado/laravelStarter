<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use App\Models\Unities;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        // $products = Products::with(['category', 'unity'])->get();
        return view('Products.listProduct', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        $unities = Unities::all();
        return view('Products.createProduct', compact('categories', 'unities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|unique:products,name|string',
        //     'description' => 'nullable|max:100',
        //     'price' => 'required|numeric',
        //     'category' => 'required|numeric',
        //     'unity' => 'required|numeric',
        //     'quantity' => 'required|integer|min:1'
        // ]);


        $request->validate([
            'name' => 'required|string|max:255|unique:products,name|string',
            'description' => 'nullable|string|max:100',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'unity_id' => 'required|exists:unities,id',
            'quantity' => 'required|integer'
        ]);

        Products::create($request->all());
        return redirect()->route('list-product')->with('succes', 'Product was successful added');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Products $products)
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
        $product = Products::find($id);
        if($product){
            $categories = Categories::all();
            $unities = Unities::all();
            return view('Products.editProduct', compact('product', 'categories', 'unities'));
        }
        return redirect()->back()->with('fail', 'Product does not exist');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $product)
    {
        $request->validate([
            'name' => "required|string|unique:products,name,$product->id",
            'description' => 'nullable|string|max:100',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'unity_id' => 'required|exists:unities,id',
            'quantity' => 'required|integer'
        ]);

        $product->update($request->all());
        return redirect()->route('list-product')->with('Succes', 'Product was successful update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (!is_numeric($id)) {
            return redirect()->back()->with('fail', 'Cette action ne peut etre faite');
        }

        $product = Products::find($id);
        
        if($product){
            $product->delete();
            return redirect()->route('list-product')->with('warning', 'Unity '.$product->name.' was successful delete');
        }
        return redirect()->back()->with('fail', 'Product does not exist');
    }
}
