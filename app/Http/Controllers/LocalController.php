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
            'nom_locale' => 'required|string|max:255',
            // Ajoutez d'autres règles de validation au besoin
        ]);
        Local::create($request->all());
        return redirect()->route('locales.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Local $local)
    {
        //
        return view('locales.show', compact('local'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Local $local)
    {
        //
        return view('locales.edit', compact('local'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Local $local)
    {
        //
        $local->update($request->all());
        return redirect()->route('locales.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Local $local)
    {
        //
        $local->delete();
        return redirect()->route('locales.index');
    }
}
