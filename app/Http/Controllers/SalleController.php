<?php

namespace App\Http\Controllers;

use App\Models\Etage;
use App\Models\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salles = Salle::all();
        return view('salles.index', compact('salles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Salle::distinct()->pluck('id_type');
        $etages = Etage::all();

        return view('salles.create', compact('types', 'etages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code_salle' => 'required|string|max:255',
            'id_etage' => 'required|exists:etages,id_etage',
            'id_type' => 'required|exists:types,id_type',
            // Ajoutez d'autres règles de validation au besoin
        ]);

        Salle::create($request->all());
        return redirect()->route('salles.index');
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
        $types = Salle::distinct()->pluck('id_type');
        $etages = Etage::all();

        return view('salles.edit', compact('salle', 'types', 'etages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Salle $salle)
    {
        $request->validate([
            'code_salle' => 'required|string|max:255|unique:salles,code_salle',
            'id_etage' => 'required|exists:etages,id_etage',
            'id_type' => 'required|exists:types,id_type',

        ]);

        $salle->update($request->all());
        return redirect()->route('salles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salle $salle)
    {
        $salle->delete();
        return redirect()->route('salles.index');
    }
}
