<?php

namespace App\Http\Controllers;

use App\Models\Semestre;
use Illuminate\Http\Request;

class SemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $semstres=semestre::paginate(15);
        return view('semestre',compact('semstres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('addSemestre');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except(['program', '_token']); // Exclure les clés "program" et "_token"
    
        foreach ($data as $key => $value) {
            // Vérifier si la valeur n'est pas NULL
            if ($value !== null) {
                // Vérifier si la clé n'est pas un numéro (pour ignorer "program" et "_token")
                // if (!is_numeric($key)) {
                //     continue; // Ignorer les clés qui ne sont pas des numéros
                // }
    
                Semestre::create([
                    'numeroSemestre' => $key,
                    'nbrSemaine' => $value,
                ]);
            }
            
        }

        return redirect()->route('semestres.index');
        // Redirection ou réponse de confirmation après le stockage
    }

    /**
     * Display the specified resource.
     */
    public function show(Semestre $semestre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Semestre $semestre)
    {
        //
        
        return view('editSemestre',compact('semestre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Valider les données entrantes
    $request->validate([
        'numeroSemestre' => 'String', // Le numéro de semestre est requis
        // 'saison' => 'String', // La saison est requise
        'nbrSemaine' => 'String|numeric', // Le nombre de semaine doit être requis et numérique
    ]);

    // Récupérer le semestre à mettre à jour
    $semestre = Semestre::findOrFail($id);

    // Mettre à jour les champs du semestre
    $semestre->numeroSemestre = $request->numero;
    // $semestre->saison = $request->saison;
    $semestre->nbrSemaine = $request->nbrsemaine;

    // Sauvegarder les modifications
    $semestre->save();

    // Rediriger avec un message de succès
    return redirect()->route('semestres.index')->with('success', 'Le semestre a été mis à jour avec succès.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semestre $semestre)
    {
        //
        $semestre->delete();
        return redirect()->route('semestres.index')->with('success', 'Le semestre a été supprimer avec succès.');
    }
}
