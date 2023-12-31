<?php

namespace App\Http\Controllers;

use App\Models\Etage;
use App\Models\Salle;
use App\Models\Type;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salles = Salle::all();
        return view('salle.index', compact('salles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $types = Salle::distinct()->pluck('id_type');
        $types = Type::all();
        $etages = Etage::all();

        return view('salle.create', compact('types', 'etages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code_salle' => 'required|string|max:255|unique:salles,code_salle',
            'id_etage' => 'required|exists:etages,id_etage',
            'id_type' => 'required|exists:types,id',
            // Ajoutez d'autres règles de validation au besoin
        ]);

        Salle::create($request->all());
        return redirect()->route('salle.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Salle $salle)
    {
        return view('salles.show', compact('salle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salle $salle)
    {
        // $types = Salle::distinct()->pluck('id_type');
        $types = Type::all();
        $etages = Etage::all();

        return view('salle.edit', compact('salle', 'types', 'etages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Salle $salle)
    {
        $request->validate([
            'code_salle' => 'required|string|max:255|unique:salles,code_salle',
            'id_etage' => 'required|exists:etages,id_etage',
            'id_type' => 'required|exists:types,id',

        ]);

        $salle->update($request->all());
        return redirect()->route('salle.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salle $salle)
    {
        $salle->delete();
        return redirect()->route('salle.index')->with('success', 'La salle a été supprimée avec succès.');
    }
}
