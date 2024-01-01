<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use App\Models\Responsable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profs = Prof::all();
        return view('prof.index', compact('profs'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('prof.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:profs|max:255',
            'tel' => 'required|string|max:20',
            'password' => 'required|string|min:8',
        ]);

        $prof = new Prof();
        $prof->nom = $request->nom;
        $prof->prenom = $request->prenom;
        $prof->email = $request->email;
        $prof->tel = $request->tel;
        $prof->password = bcrypt($request->password); // Hash the password
        $prof->save();

        return redirect()->route('profindex')->with('success', 'Prof saved successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Prof $prof)
    {
        //
        return view('prof.show', compact('prof'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prof $prof)
    {
        //

        return view('prof.edit', compact('prof'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prof $prof)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tel' => 'required|string|max:20',
            'password' => 'required|string|min:8',
        ]);

        $prof->nom = $request->nom;
        $prof->prenom = $request->prenom;
        $prof->email = $request->email;
        $prof->tel = $request->tel;
        $prof->password = bcrypt($request->password); // Hash the password
        $prof->save();

        return redirect()->route('profindex')->with('success', 'Informations updated successfully');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prof $prof)
    {
        //
        $prof->delete();
        return redirect()->route('profindex')->with("success", "Prof is deleted");
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $prof = Prof::where('email', $request->email)->first();


        if ($prof && Hash::check($request->password, $prof->password)) {

            session(['user_id' => $prof->id_prof, 'email' => $prof->email, 'nom' => $prof->nom, 'prenom' => $prof->prenom]);
            // Passwords match, so the login is successful
            // dd(session());
            return redirect()->route('profindex');
        }

        // Authentication failed
        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {


        $request->session()->invalidate();

        return redirect()->route('home'); // Change this to your desired redirect path
    }
    public function makeResponsable(Prof $prof)
    {
        try {
            $prof->responsables()->create();

            return redirect()->route('profindex')->with('success', "Le professeur: {$prof->nom} {$prof->prenom} est devenu responsable 📝");
        } catch (\Exception $e) {
            // Handle the exception, maybe log or display an error message
            return redirect()->back()->with('error', 'Error making professor responsible.');
        }
    }

    public function unmakeResponsable(Prof $prof)
    {
        try {
            $responsable = $prof->responsables()->first();

            if ($responsable) {
                $responsable->delete();
                return redirect()->route('profindex')->with('success', "Le professeur: {$prof->nom} {$prof->prenom} n'est plus responsable 📝");
            } else {
                return redirect()->route('profindex')->with('error', "Le professeur n'était pas responsable.");
            }
        } catch (\Exception $e) {
            // Handle the exception, maybe log or display an error message
            return redirect()->back()->with('error', 'Error removing responsibility.');
        }
    }
}
