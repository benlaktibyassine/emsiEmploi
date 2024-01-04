<?php

namespace App\Http\Controllers;

use App\Models\Disponibilite;
use App\Models\Jour;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DisponibiliteController extends Controller
{

    public function create()
    {
        $jours = Jour::all();
        return view('profile_prof.available', compact("jours"));
    }

    public function store(Request $request)
    {
        $id_prof = session('user_id');
        $request->validate([
            'id_jour' => ['required'],
            'heure_debut' => ['required', 'before:heure_fin'],
            'heure_fin' => ['nullable', 'after:heure_debut'],
            'id_prof' => ['required', Rule::in([$id_prof])], // Assuming id_prof is an integer
        ]);

        Disponibilite::create([
            'id_jour' => $request->id_jour,
            'id_prof' => $request->id_prof,
            'heure_debut' => $request->heure_debut,
            'heure_fin' => $request->heure_fin,
        ]);
    }

    public function destroy(Disponibilite $disponibilite)
    {
        $disponibilite->delete();
        return redirect()->route('etage.index');
    }
    public function getAvailableTimeSlots(Request $request)
    {
        $id_prof = $request->id_prof;
        $availableTimeSlots = Disponibilite::getAvailableTimeSlots($id_prof);
        return view('availability.timetable', compact('availableTimeSlots'));
    }
}
