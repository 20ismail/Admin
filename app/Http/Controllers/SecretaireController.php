<?php
// app/Http/Controllers/SecretaireController.php
namespace App\Http\Controllers;

use App\Models\Secretaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SecretaireController extends Controller
{
    public function index()
    {
        // Fetch all secretaires and paginate the results
        $sec = Secretaire::paginate(10); // Adjust the pagination limit as needed

        // Pass the secretaires to the view
        return view('secretaire', compact('sec'));
    }

    public function store(Request $request)
    {
        // try {
            // Validation rules
            $request->validate([
                'nom' => 'required|string|max:255',
                'prenom' => 'required|string|max:255',
                'email' => 'required|email|unique:secretaires,email',
                'numTelephone' => 'required|string|max:20',
                'password' => 'required|string|min:8',
               
            ]);
           
            // Create new secretaire
            Secretaire::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'numTelephone' => $request->numTelephone,
                'password' => bcrypt($request->password),
                
                'idAdministrateur' => Auth::id(),
            ]);
            
            return redirect()->route('seceretaires.index')->with('success', 'Secretaire added successfully');
        // } catch (\Exception $e) {
        //     return back()->withInput()->withErrors(['error' => $e->getMessage()]);
        // }
    }
    public function edit($id)
    {
        //
        $secretaire = Secretaire::findOrFail($id);
        return view('secretaireEdit',compact('secretaire'));
        // dd($secretaire);
    }
    public function update(Request $request, $id)
    {
        $secretaire = Secretaire::findOrFail($id);
    
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:secretaires,email,' . $id,
            'numTelephone' => 'required|string|max:20',
            'password' => 'nullable|string|min:8',
            
        ]);
    
        $secretaire->update($request->except(['password']) + [
            'password' => $request->password ? bcrypt($request->password) : $secretaire->password,
        ]);
    
        return redirect()->route('seceretaires.index')->with('success', 'Secretaire updated successfully');
    }
    
   
    public function destroy($id)
{
 try{   // Find secretaire by ID and delete
    $secretaire= Secretaire::findOrFail($id);
    $secretaire->delete();
    return redirect()->route('seceretaires.index')->with('success', 'Secrétaire supprimée avec succès');
}catch (\Exception $e) {
    return back()->withErrors(['error' => 'Une erreur est survenue lors de la suppression de l\'secretaire : ' . $e->getMessage()]);
}

}

}
