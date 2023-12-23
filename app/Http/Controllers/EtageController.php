<?php

namespace App\Http\Controllers;

use App\Models\Etage;
use Illuminate\Http\Request;

class EtageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etages = Etage::all();
        return view('etages.index', compact('etages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_etage' => 'required|string|max:255',
            'id_local' => 'required|exists:locales,id_locale',
            
        ]);

        Etage::create($request->all());
        return redirect()->route('etages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etage $etage)
    {
        return view('etages.show', compact('etage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etage $etage)
    {
        return view('etages.edit', compact('etage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etage $etage)
    {
        $request->validate([
            'nom_etage' => 'required|string|max:255',
            'id_local' => 'required|exists:locales,id_locale',
           
        ]);

        $etage->update($request->all());
        return redirect()->route('etages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etage $etage)
    {
        $etage->delete();
        return redirect()->route('etages.index');
    }
}
