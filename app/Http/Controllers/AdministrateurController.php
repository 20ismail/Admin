<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use Illuminate\Http\Request;
use Hash;
use Auth;
class AdministrateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Administrateur $Administrateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Administrateur $Administrateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Administrateur $administrateur)
    {   
        // dd('test');
        // dd($request->id);
        
        $request->validate([
            'nom' => 'nullable|string',
            'prenom' => 'nullable|string',
            'email' => 'nullable|email', // Correction: Supprimer le pipe | en début de règle
            'numTelephone' => 'nullable|string',
            'password' => 'nullable|string|min:8', // Correction: Supprimer le pipe | en début de règle
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        // dd('hhh');
        $administrateur->id=Auth::user()->id;
        $administrateur->nom=$request->input('nom');
        $administrateur->prenom=$request->input('prenom');
        $administrateur->email=$request->input('email');
        $administrateur->numTelephone=$request->input('numTelephone');

        if($request->input('password') != NULL){
            $administrateur->password=hash::make($request->input('password'));
        }
        
        if ($request->hasFile('image')) {
            
            $imagePath = $request->file('image')->store('profile','public');
            $administrateur->image = $imagePath;
        }
    //    dd($Administrateur->save());
        // dd($Administrateur);
    //    dd();
       $administrateur->update();
        
        
        return redirect()->back();
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Administrateur $Administrateur)
    {
        //
    }
}
