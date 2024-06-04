<?php

namespace App\Http\Controllers;

use App\Models\SalleEst;
use Illuminate\Http\Request;
use Auth;
class SalleEstController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salles = SalleEst::paginate(15); // Fetch all Salle records from your database
        return view('salle', ['salles' => $salles]);
        //
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
        $request->validate([
            'TypeSalle' => 'nullable|string|max:255', // Valider que TypeSalle peut être nul, est une chaîne et ne dépasse pas 255 caractères
            'numero' => 'nullable|string', // Valider que numero peut être nul et est une chaîne
        ]);
        

        $request->id=Auth::user()->id;
        // $request->TypeSalle=$request->input('type');
        // $request->numero=$request->input('numero');
        // $request->idCordonateur=Auth::user()->id;
        // dd($request->id);
        SalleEst::create([
            'TypeSalle'=>$request->type,
            'numero'=>$request->numero,
            'idAdministrateur'=>$request->id,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(SalleEst $salleEst)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SalleEst $salleEst)
    {
        //
        return view('salleEdit',compact('salleEst'));
        // dd($salleEst);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SalleEst $salleEst)
    {
         $request->validate([
            'TypeSalle' => 'nullable|string|max:255', // Valider que TypeSalle peut être nul, est une chaîne et ne dépasse pas 255 caractères
            'numero' => 'nullable|string', // Valider que numero peut être nul et est une chaîne
        ]);

        $salleEst->TypeSalle=$request->input('TypeSalle');
        $salleEst->numero=$request->input('numero');
        $salleEst->idAdministrateur=Auth::user()->id;
        $salleEst->save();

       
        return redirect()->route('salleEsts.index')->with('success', 'Mise à jour réussie!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SalleEst $salleEst)
    {
        $salleEst->delete();
        return redirect()->route('salleEsts.index')->with('success', 'Salle supprimée avec succès!');
    }
}
