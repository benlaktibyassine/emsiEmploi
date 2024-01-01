<?php

namespace App\Http\Controllers;

use App\Models\Semestre;
use Illuminate\Http\Request;

class SemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semestres = Semestre::all();
        return view('semestres.index', compact('semestres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('semestres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sem' => 'required|string|max:255|unique:semestres,sem',
        ]);

        Semestre::create($request->all());
        return redirect()->route('semestres.index')->with('success', 'Le semestre a été ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Semestre $semestre)
    {
        return view('semestres.show', compact('semestre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Semestre $semestre)
    {
        return view('semestres.edit', compact('semestre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Semestre $semestre)
    {
        $request->validate([
            'sem' => 'required|string|max:255|unique:semestres,sem,' . $semestre->id_sem,
        ]);

        $semestre->update($request->all());
        return redirect()->route('semestres.index')->with('success', 'Le semestre a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semestre $semestre)
    {
        $semestre->delete();
        return redirect()->route('semestres.index')->with('success', 'Le semestre a été supprimé avec succès.');
    }
}
