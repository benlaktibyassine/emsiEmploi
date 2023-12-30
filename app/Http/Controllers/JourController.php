<?php

namespace App\Http\Controllers;

use App\Models\Jour;
use Illuminate\Http\Request;

class JourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jours = Jour::all();
        return view('jour.index', compact("jours"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('jour.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom_jour' => 'required|string|max:255',
        ]);
        $jour = new Jour();
        $jour->nom_jour = $request->nom_jour;
        $jour->save();
        return redirect()->route('jour.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jour $jour)
    {
        //
        return view('jour.show', compact('jour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jour $jour)
    {
        //
        return view('jour.edit', compact('jour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jour $jour)
    {
        $request->validate([
            'nom_jour' => 'required|string|max:255',

        ]);
        $jour->nom_jour = $request->nom_jour;
        $jour->save();
        return redirect()->route('jour.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jour $jour)
    {
        $jour->delete();
        return redirect()->route('jour.index');
    }
}
