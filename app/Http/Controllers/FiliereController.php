<?php

namespace App\Http\Controllers;
use App\Models\Departement;
use App\Models\Filiere;
use Illuminate\Http\Request;
use DB;
class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $filiere = DB::table('filieres')
        ->join('departements', 'idDepartement', '=', 'departements.id')
        ->select('*', 'departements.id as departement_id','filieres.id as filier_id')
        
        ->paginate(15);
        $departement=Departement::all();
        // dd($filiere);
        return view('filiere',compact('filiere','departement'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Filiere $filiere)
    {
        //
        $request->validate([
            'intitule_filiere' => 'string',
            'cycle' => 'string',
            // 'idDepartement' => 'required|exists:departements,id',
        ]);
        $departement = Departement::where('intitule', $request->input('departement'))->first();

        // dd($request->input('name'));
        $filiere->intitule_filiere=$request->input('name');
        $filiere->cycle=$request->input('cycle');
        $filiere->idDepartement=$departement->id;
        $filiere->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Filiere $filiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filiere $filiere)
    {
        //
        $filiere = DB::table('filieres')
        ->join('departements', 'filieres.idDepartement', '=', 'departements.id')
        ->select('*', 'departements.id as departement_id', 'filieres.id as filiere_id')
        ->where('filieres.id', $filiere->id)
        ->first();  // Utiliser `first()` au lieu de `get()`
    
    // Maintenant vous pouvez accéder directement aux propriétés de `$fil`
    // dd($fil->cycle);
    
        $departement=Departement::all();
        return view('filiereEdit',compact('filiere','departement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filiere $filiere)
    {
        $request->validate([
            'intitule_filiere' => 'string',
            'cycle' => 'string',
            // 'idDepartement' => 'required|exists:departements,id',
        ]);
       $departement=Departement::where('intitule',$request['departement'])->first();
       $filiere->intitule_filiere=$request['name'];
       $filiere->cycle=$request['cycle'];
       $filiere->idDepartement=$departement['id'];
       $filiere->save();
    //    dd($departement);
    return redirect()->route('filieres.index')->with('success', 'filiere  modifiée avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filiere $filiere)
    {
        //
        $filiere->delete();
        return redirect()->back()->with('success', 'Disponibilité du professeur supprimée avec succès!');

    }
}
