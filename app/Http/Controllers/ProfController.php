<?php

namespace App\Http\Controllers;

use App\Models\Prof;
use Illuminate\Http\Request;

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
        //
        $prof->nom = $request->nom;
        $prof->prenom = $request->prenom;
        $prof->email = $request->email;
        $prof->password =bcrypt($request->prenom);
        $prof->tel =$request->tel;
        $prof->save();
        return redirect()->route('profindex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prof $prof)
    {
        //
        $prof->delete();
        return redirect()->route('profindex');
    }
}
