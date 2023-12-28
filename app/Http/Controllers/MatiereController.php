<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $matieres = Matiere::all();
        return view('matiere.index', compact("matieres"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('matiere.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom_matiere' =>'required|string|max:255',
        ]);
        $matiere = new Matiere();
        $matiere->nom_matiere = $request->nom_matiere;
        $matiere->save();
        return redirect()->route('matiere.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Matiere $matiere)
    {
        //
        return view('matiere.show', compact('matiere'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matiere $matiere)
    {
        //
        return view('matiere.edit', compact('matiere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matiere $matiere)
    {
        //
        $request->validate([
            'nom_matiere' =>'required|string|max:255',

        ]);
        $matiere->nom_matiere = $request->nom_matiere;
        $matiere->save();
        return redirect()->route('matiere.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matiere $matiere)
    {
        //
        $matiere->delete();
        return redirect()->route('matiere.index');
    }
}
