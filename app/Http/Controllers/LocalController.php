<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $locales = Local::all();
        return view('locales.index', compact('locales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('locales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_local' => 'required|string|max:255',
            // Ajoutez d'autres règles de validation au besoin
        ]);

        $local = new Local();
        $local->nom_local = $request->nom_local;
        $local->save();
        return redirect()->route('locale.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Local $locale)
    {
        //
        return view('locales.show', compact('locale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Local $locale)
    {
        //
        // dd("r");
        return view('locales.edit', compact('locale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Local $locale)
    {
        //
        $locale->update($request->all());
        return redirect()->route('locale.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Local $locale)
    {
        //
        // dd($local);
        $locale->delete();
        return redirect()->route('locale.index');
    }
}
