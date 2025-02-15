<?php

namespace App\Http\Controllers;

use App\Models\Unities;
use Illuminate\Http\Request;

class UnitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unities = Unities::all();
        return view('Unities.listUnity', compact('unities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Unities.createUnity');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:unities,name|string',
            'description' => 'required|max:100'
        ]);
        Unities::create($request->all());
        return redirect()->route('list-unity')->with('succes', 'Unity was successful added');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Unities $unities)
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
        $unity = Unities::find($id);
        if($unity){
            return view('Unities.editUnity', compact('unity'));
        }
        return redirect()->back()->with('fail', 'Unity does not exist');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unities $unity)
    {
        $request->validate([
            'name' => "required|string|unique:unities,name,$unity->id",
            'description' => 'nullable|max:100'
        ]);

        $unity->update($request->all());
        return redirect()->route('list-unity')->with('Succes', 'Unity was successful update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (!is_numeric($id)) {
            return redirect()->back()->with('fail', 'Cette action ne peut etre faite');
        }

        $unity = Unities::find($id);
        
        if($unity){
            $unity->delete();
            return redirect()->route('list-unity')->with('warning', 'Unity '.$unity->name.' was successful delete');
        }
        return redirect()->back()->with('fail', 'Unity does not exist');

    }
}
