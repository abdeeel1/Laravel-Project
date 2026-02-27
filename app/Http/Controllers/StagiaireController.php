<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $stagiaires = Stagiaire::all();

        return view('stagiaires.index', compact('stagiaires'));

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('stagiaires.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'genre' => 'required|in:F,H',
            'note' => 'required|numeric|min:0|max:20',
            'groupe' => 'required|string|max:255',
        ]);

        Stagiaire::create($validated);
        return redirect()->route('stagiaires.index')->with('success', 'Stagiaire ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stagiaire $stagiaire)
    {
        //
        $s = Stagiaire::find($stagiaire)->first();
        
        return view('stagiaires.show', compact('s'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagiaire $stagiaire)
    {
        //
        return view('stagiaires.update', compact('stagiaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        //
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'genre' => 'required|in:F,H',
            'note' => 'required|numeric|min:0|max:20',
            'groupe' => 'required|string|max:255',
        ]);

        $stagiaire->update($validated);
        return redirect()->route('stagiaires.index')->with('success', 'Stagiaire modifié avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stagiaire $stagiaire)
    {
        //
        $stagiaire->delete();
        return redirect()->back();
    }
}
