<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Jour;
use App\Models\Matiere;
use App\Models\Prof;
use App\Models\Seance;
use App\Models\Semestre;
use App\Models\Type;
use Illuminate\Http\Request;

class SeanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seances = Seance::with('jour', 'groupe', 'prof', 'matiere', 'sem', 'type')->get();

        return view('seances.index', compact('seances'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $jours = Jour::all(); // Replace with your actual model and method
        $groupes = Groupe::all();
        $profs = Prof::all();
        $matieres = Matiere::all();
        $sems = Semestre::all();
        $types = Type::all();

        return view('seances.create', compact('jours', 'groupes', 'profs', 'matieres', 'sems', 'types'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre_seance' => 'required|max:255',
            'id_jour' => 'required|exists:jours,id', // Adjust the table name and field name accordingly
            'id_groupe' => 'required|exists:groupes,id',
            'id_prof' => 'required|exists:profs,id',
            'id_matiere' => 'required|exists:matieres,id',
            'id_sem' => 'required|exists:semestres,id',
            'code_salle' => 'required|max:255',
            'id_type' => 'required|exists:types,id',
            // Add validation rules for other fields
        ]);

        // Assuming you have relationships set up in your Seance model
        $seance = Seance::create($validatedData);

        return redirect()->route('seances.index')->with('success', 'Seance created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Seance $seance)
    {
        $seance->load('jour', 'groupe', 'prof', 'matiere', 'sem', 'type', 'salle'); // Eager load relationships

        return view('seances.show', compact('seance'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seance $seance)
    {

        $jours = Jour::all();
        $groupes = Groupe::all();
        $profs = Prof::all();
        $matieres = Matiere::all();
        $sems = Semestre::all();
        $types = Type::all();

        return view('seances.edit', compact('seance', 'jours', 'groupes', 'profs', 'matieres', 'sems', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seance $seance)
    {
        $validatedData = $request->validate([
            'titre_seance' => 'required|max:255',
            'id_jour' => 'required|exists:jours,id',
            'id_groupe' => 'required|exists:groupes,id_groupe',
            'id_prof' => 'required|exists:profs,id_prof',
            'id_matiere' => 'required|exists:matieres,id_matiere',
            'id_sem' => 'required|exists:semestres,id_sem',
            'code_salle' => 'required|exists:salles,code_salle',
            'id_type' => 'required|exists:types,id',
            // Add validation rules for other fields
        ]);

        $seance->update($validatedData);

        return redirect()->route('seances.index')->with('success', 'Seance updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seance $seance)
    {
        $seance->delete();

        return redirect()->route('seances.index')->with('success', 'Seance deleted successfully!');
    }
}
