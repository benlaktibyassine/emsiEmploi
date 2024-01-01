<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $types = Type::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_type' => ['required', 'max:255'],
        ]);
        $type = new Type();
        $type->nom_type = $request->nom_type;
        $type->save();
        return redirect()->route("type.index")->with('success', "Le type a bien été ajouté");
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return view('type.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        //
        return view("type.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        //
        $request->validate([
            'nom_type' => ['string', 'max:255'],
        ]);
        $type->update($request->all());
        return redirect()->route("type.index")->with("success", "le type a bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->route("type.index")->with("success", "Le type a bien été supprimé");
    }
}
