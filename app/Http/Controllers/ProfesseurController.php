<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfesseurController extends Controller
{
    public function index()
    {
        $teachers = Professeur::paginate(10); // Adjust the pagination limit as needed
        // dd($teachers);
        return view('enseignant', compact('teachers'));
    }

    public function store(Request $request,Professeur $prof)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:professeurs,email',
            'numTelephone' => 'required|string|max:20',
            'password' => 'required|string|min:8',
            'heuresEnseignementAnnee' => 'required|integer|min:0',
        ]);

            // dd($request->nom,$request->prenom,$request->email,$request->numTelephone,$request->heuresEnseignementAnnee,Hash::make($request->password),Auth::id(),);
        // try {
            $prof->nom=$request->nom;
            $prof->prenom=$request->prenom;
            $prof->email=$request->email;
            $prof->numTelephone=$request->numTelephone;
            $prof->password=Hash::make($request->password);
            $prof->id_admin= Auth::id();
            $prof->id_departement=1;
            $prof->image=NULL;
            $prof->heuresEnseignementAnnee=$request->heuresEnseignementAnnee;
        //    $var= Professeur::create([
        //         'nom' => $request->nom,
        //         'prenom' => $request->prenom,
        //         'email' => $request->email,
        //         'numTelephone' => $request->numTelephone,
        //         'password' => Hash::make($request->password),
        //         'heuresEnseignementAnnee' => $request->heuresEnseignementAnnee,
        //         'id_admin' => Auth::id(), // Assuming the logged-in user is the admin
        //         'id_departement '=>1,
        //         'image'=>NULL,
        //     ]);
        $prof->save();
            // dd($prof);

            return redirect()->route('enseignant.index')->with('success', 'Enseignant ajouté avec succès');
        // } catch (\Exception $e) {
        //     return back()->withInput()->withErrors(['error' => 'Une erreur est survenue lors de l\'ajout de l\'enseignant : ' . $e->getMessage()]);
        // }
    }

    public function edit($id)
    {
        $teacher = Professeur::findOrFail($id);
        return view('editEnseignant', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'numTelephone' => 'required|string|max:20',
            'password' => 'nullable|string|min:8',
            'heuresEnseignementAnnee' => 'required|integer',
        ]);

        $teacher = Professeur::findOrFail($id);
        $teacher->nom = $request->nom;
        $teacher->prenom = $request->prenom;
        $teacher->email = $request->email;
        $teacher->numTelephone = $request->numTelephone;
        if ($request->filled('password')) {
            $teacher->password = Hash::make($request->password);
        }
        $teacher->heuresEnseignementAnnee = $request->heuresEnseignementAnnee;
        $teacher->save();

        return redirect()->route('enseignant.index')->with('success', 'Enseignant mis à jour avec succès');
    }

    public function destroy($id)
    {
        // Suppression du vacataire
        // dd($id);
        Professeur::findOrFail($id)->delete();

        // Redirection vers la vue index des vacataires avec un message de succès
        return redirect()->route('enseignant.index')->with('success', 'Enseignant supprimé avec succès.');
    }
}