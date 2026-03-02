<?php


namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AnnonceController extends Controller
{
    
    
    public function index(Request $request){
    
    $query = Annonce::query();

    
    if ($request->filled('titre')) {
        $query->where('titre', 'like', '%' . $request->titre . '%');
    }

   
    if ($request->filled('type')) {
        $query->where('type', $request->type);
    }

    
    if ($request->filled('ville')) {
        $query->where('ville', 'like', '%' . $request->ville . '%');
    }

    
    if ($request->filled('min_surface')) {
        $query->where('superficie', '>=', $request->min_surface);
    }

    
    if ($request->filled('max_surface')) {
        $query->where('superficie', '<=', $request->max_surface);
    }

    
    if ($request->filled('prix_max')) {
        $query->where('prix', '<=', $request->prix_max);
    }

    
    if ($request->filled('etat')) {
        $query->where('etat', $request->etat);
    }

    $annonces = $query->get();
    return view('annonces.index', compact('annonces'));



    }

    
    public function create(){
        
        return view('annonces.create');
    
    }
    
    public function show(Annonce $annonce){
        return view('annonces.show', compact('annonce'));
    }
    

    public function store(Request $request){
    
    $validated = $request->validate([
        'titre' => 'required|string|max:255',
        'desc' => 'required|string',
        'type' => 'required|string',
        'ville' => 'required|string|max:255',
        'superficie' => 'required|integer',
        'etat' => 'required|in:Neuf,Ancien',
        'prix' => 'required|numeric',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $extension = $file->getClientOriginalExtension();
        $filename = Str::slug($validated['titre']) . '_' . now()->format('YmdHis') . '.' . $extension;
        $path = $file->storeAs('annonces', $filename, 'public');
        $validated['photo'] = $path;
    }

    Annonce::create($validated);
    
    return redirect()->route('annonces.index')->with('success', 'Annonce créée avec succès');
    
    }

    public function update(Request $request, Annonce $annonce){
        
    
    $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'desc' => 'required|string',
            'type' => 'required|string',
            'ville' => 'required|string|max:255',
            'superficie' => 'required|integer',
            'etat' => 'required|in:Neuf,Ancien',
            'prix' => 'required|numeric',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            if ($annonce->photo && Storage::disk('public')->exists($annonce->photo)) {
                Storage::disk('public')->delete($annonce->photo);
            }
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = Str::slug($validated['titre']) . '_' . now()->format('YmdHis') . '.' . $extension;
            $path = $file->storeAs('annonces', $filename, 'public');
            $validated['photo'] = $path;
        }

        $annonce->update($validated);
        
        return redirect()->route('annonces.index')->with('success', 'Annonce modifiée avec succès');
    }


    public function edit(Annonce $annonce)
    {
        return view('annonces.edit', compact('annonce'));
    }

    public function destroy(Annonce $annonce)
    {
        
        if ($annonce->photo && Storage::disk('public')->exists($annonce->photo)) {
            Storage::disk('public')->delete($annonce->photo);
        }

        
        $annonce->delete();

        return redirect()->back()->with('success', 'Annonce supprimée avec succès');
    }

    
    public function dashboard()
    {
    $stats = [
        'total' => Annonce::count(),
        'prix_total' => Annonce::sum('prix'),
        'prix_moyen' => Annonce::avg('prix'),
        'superficie_total' => Annonce::sum('superficie')
    ];
    
    $annonces = Annonce::latest()->get();

    return view('annonces.dashboard', compact('stats', 'annonces'));
    
    }

}