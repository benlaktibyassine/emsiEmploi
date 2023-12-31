<?php

namespace App\Http\Controllers;

use App\Models\Filliere;
use Illuminate\Http\Request;

class FilliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $fillieres = Filliere::all();
        // dd($fillieres);
        return view('fillieres.index', compact("fillieres"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('fillieres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       $request->validate([
            'code_filliere' => "required|min:3",
            'nom_filliere' => "required"
        ]);
        $nouvelleFiliere = new Filliere();
        $nouvelleFiliere->code_filliere = $request->code_filliere;
        $nouvelleFiliere->nom_filliere = $request->nom_filliere;
        $nouvelleFiliere->save();
        return redirect()->route('fillieres.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Filliere $filliere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filliere $filliere)
    {
        //
        return view('fillieres.edit',compact('filliere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filliere $filliere)
    {
        //validation des champs
        $request->validate([
            'code_filliere'=>['required','min:2'],
            'nom_filliere'=> ['required']
        ]);
        //Mise à jour de la base de données
        $filliere->code_filliere=$request->code_filliere;
        $filliere->nom_filliere= $request->nom_filliere;
        $filliere->save();
        //Redirection vers la page d'accueil avec un message flash
        return redirect()->route("fillieres.index")->with('success','La filière a bien été modifiée !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filliere $filliere)
    {
        //

        $filliere->delete();
        return redirect()->route('fillieres.index');
    }
}
