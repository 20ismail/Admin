<?php

namespace App\Http\Controllers;
use App\Models\Professeur;
use App\Models\Disponibilite_prof;
use Illuminate\Http\Request;
use DB;
class DisponibiliteProfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $mons=Professeur::all();
        $prof = DB::table('disponibilite_profs')
        ->join('professeurs', 'disponibilite_profs.id_prof', '=', 'professeurs.id')
        ->select('*', 'disponibilite_profs.id', 'professeurs.id as id_professeur')
        ->paginate(15); // 15 is the number of items per page
    
// dd($prof);
    return view('dispo',compact('prof','mons'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Disponibilite_prof $disponibilite_prof)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disponibilite_prof $disponibilite_prof)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disponibilite_prof $disponibilite_prof)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disponibilite_prof $Disponibilite_prof)
    {
        // dd( $Disponibilite_prof);
        $Disponibilite_prof->delete();
        return redirect()->back()->with('success', 'Disponibilité du professeur supprimée avec succès!');
    }
}

