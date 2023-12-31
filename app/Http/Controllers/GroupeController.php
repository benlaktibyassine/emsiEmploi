<?php

namespace App\Http\Controllers;

use App\Models\Filliere;
use App\Models\Groupe;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $groupes = Groupe::with('fillieres')->get();
        return view("groupe.index", compact('groupes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $fillieres = Filliere::all();
        return view('groupe.create', compact('fillieres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom_groupe' => 'required|string|max:255',
            'code_filliere' => 'required|exists:filliere,code_filliere',
        ]);


        Groupe::create([
            'nom_groupe' => $request->nom_groupe,
            'code_filliere' => $request->code_filliere,
        ]);
        return redirect()->route('groupe.index')->with('success', 'Le groupe a été ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Groupe $groupe)
    {
        //
        return view('groupe.show', compact('groupe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Groupe $groupe)
    {
        //
        $fillieres = Filliere::all();
        return view('groupe.edit', compact('groupe', 'fillieres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Groupe $groupe)
    {
        //
        $request->validate([
            'nom_groupe' => ['required', 'string', 'max:255'],
            'code_filliere' => ['required', 'exists:filliere,code_filliere']
        ]);
        $groupe->update($request->all());
        return redirect()->route('groupe.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Groupe $groupe)
    {
        //
        $groupe->delete();
        return redirect()->route('groupe.index');
    }
}
