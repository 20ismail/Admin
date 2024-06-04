<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacataire;
use Illuminate\Support\Facades\Auth;

class VacataireController extends Controller
{
    public function index()
    {
        $vacataires = Vacataire::paginate(10);
        // dd('hh');
        return view('vacataire', compact('vacataires'));
    }

    public function store(Request $request)
    {
        // Validation des données reçues du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:vacataires',
        ]);

        // Création d'une nouvelle instance de Vacataire avec les données du formulaire
        $vacataire = new Vacataire([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'idAdministrateur' => Auth::id(), // Assuming the logged-in user is the admin
        ]);

        // Enregistrement du vacataire dans la base de données
        $vacataire->save();

        // Redirection vers la vue index des vacataires avec un message de succès
        return redirect()->route('vacataire.index')->with('success', 'Vacataire ajouté avec succès.');
    }

    public function edit($id)
    {
        $vacataire = Vacataire::findOrFail($id);
        return view('editVacataire', compact('vacataire'));
    }

    public function update(Request $request, $id)
    {
        // Validation des données reçues du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:vacataires,email,' . $id,
        ]);

        // Récupération du vacataire à mettre à jour
        $vacataire = Vacataire::findOrFail($id);

        // Mise à jour des données du vacataire
        $vacataire->update($request->all());

        // Redirection vers la vue index des vacataires avec un message de succès
        return redirect()->route('vacataire.index')->with('success', 'Vacataire mis à jour avec succès.');
    }

    public function destroy($id)
    {
        // Suppression du vacataire
        Vacataire::findOrFail($id)->delete();

        // Redirection vers la vue index des vacataires avec un message de succès
        return redirect()->route('vacataire.index')->with('success', 'Vacataire supprimé avec succès.');
    }
}