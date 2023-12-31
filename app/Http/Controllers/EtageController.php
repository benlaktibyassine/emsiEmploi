<?php

namespace App\Http\Controllers;

use App\Models\Etage;
use Illuminate\Http\Request;
use App\Models\Local;

class EtageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etages = Etage::with('locale')->get();
    return view('etage.index', compact('etages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = Local::all(); // Fetch all locales from the database
        return view('etage.create', compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_etage' => 'required|string|max:255',
            'id_local' => 'required|exists:locals,id_local', 
        ]);
    
        
        $etage = Etage::create([
            'nom_etage' => $request->nom_etage,
        ]);
        
        $etage->locale()->create(['id_local' => $request->id_local]);
            $etage->save();
    
            return redirect()->route('etages.index')->with('success', 'L\'étage a été ajouté avec succès.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Etage $etage)
    {
        return view('etage.show', compact('etage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etage $etage)
    {
        
        $locales = Local::all(); // Fetch all locales from the database
    return view('etage.edit', compact('etage', 'locales'));
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
        return redirect()->route('etage.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etage $etage)
    {
        $etage->delete();
        return redirect()->route('etage.index');
    }
}
