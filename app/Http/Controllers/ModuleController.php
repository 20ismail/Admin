<?php

namespace App\Http\Controllers;
use App\Models\Filiere;
use App\Models\Module;
use App\Models\Professeur;
use App\Models\Semestre;
use DB;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;
use RealRashid\SweetAlert\Facades\Alert;
class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $results = DB::table('modules')
            ->join('professeurs', 'modules.id_prof', '=', 'professeurs.id')
            ->join('filieres', 'modules.id_filiere', '=', 'filieres.id')
            ->select('*','modules.id as module_id')
            ->paginate(15);
            $prof=Professeur::all();
            $prof2=Professeur::all();
            $fil=Filiere::all();
            $fil2=Filiere::all();
            $semestre=Semestre::all();
        // dd($results);
        $selectedCycle='';
        return view('module',compact('results','prof','prof2','fil','fil2','semestre','selectedCycle'));
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
    public function store(Request $request,Module $module)
    {   

        $request->validate([
            'intitule_module' => 'nullable|string|max:255',
            'heuresCours' => 'nullable|integer',
            'heuresTD' => 'nullable|integer',
            'heuresTP' => 'nullable|integer',
            'niveau' => 'nullable|string|max:255',
            // 'id_prof' => 'required|exists:professeurs,id',
            // 'id_semestre' => 'required|exists:semestres,id',
            // 'id_filiere' => 'required|exists:filieres,id',
        ]);
        // dd($request['name']);
        $filiere = Filiere::where('intitule_filiere', $request['name'])
                   ->where('cycle', $request['cycle'])
                   ->first();
        $semestre=Semestre::where('numeroSemestre',$request['numeroSemestre'])->first();
                //    dd($request['cycle']);
         $prof = Professeur::where(DB::raw("CONCAT(nom, ' ', prenom)"), $request['prof'])->first();
         
         $module->intitule_module = $request->input('intitule');
         $module->heuresCours = $request->input('heures_cours');
         $module->heuresTD = $request->input('heures_td');
         $module->heuresTP = $request->input('heures_tp');
         $module->niveau = $request->input('niveau');
         $module->id_prof = $prof['id'];
         $module->id_semestre = $semestre['id'];
         $module->id_filiere = $filiere['id'];
         $module->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        //
            // dd('hhh');
            $prof2=Professeur::all();
            $fil=Filiere::all();
            $semestre=Semestre::all();
            $results = DB::table('modules')
            ->join('professeurs', 'modules.id_prof', '=', 'professeurs.id')
            ->join('filieres', 'modules.id_filiere', '=', 'filieres.id')
            ->join('semestres', 'modules.id_semestre', '=', 'semestres.id')
            
            ->where('modules.id',$module['id'])
            ->select('*','modules.id as module_id')
            ->first();
            // dd( $results);
        return view('moduleEdit',compact('prof2','fil','results','semestre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Module $module)
    {
        // dd($module);
        // dd($request['responsable_module']);
        $request->validate([
            'intitule_module' => 'string|max:255',
            'heuresCours' => 'integer',
            'heuresTD' => 'integer',
            'heuresTP' => 'integer',
            'niveau' => 'string|max:255',
            // 'id_prof' => 'required|exists:profs,id',
            // 'id_semestre' => 'required|ex',
            // 'id_filiere' => 'required|exists:filieres,id',
        ]);
        // dd('hh');
        // $mod = Module::where('intitule_module', $request['cycle'])->where('niveau',$request['niveau'])->first();
        // dd($request['cycle'],$request['niveau']);
    //     // dd($request['intitule_filiere']);
        $filiere = Filiere::where('intitule_filiere', $request['intitule_filiere'])
        ->where('cycle', $request['cycle'])
        ->first();
        // dd( $filiere);
        $prof = Professeur::where(DB::raw("CONCAT(nom, ' ', prenom)"), $request['responsable_module'])->first();
        $semestre=Semestre::where('numeroSemestre',$request['numeroSemestre'])->first();
        // dd($semestre);
        $module->intitule_module = $request->input('intitule_module');
        $module->heuresCours = $request->input('heuresCours');
        $module->heuresTD = $request->input('heuresTD');
        $module->heuresTP = $request->input('heuresTP');
        $module->niveau = $request->input('niveau');
        $module->id_prof = $prof['id'];
        $module->id_semestre = $semestre['id'];
        $module->id_filiere = $filiere['id'];
    //     // dd($module);
        $module->save();
        return redirect()->route('modules.index')->with('success', 'Modules Modifiée avec succès!');
    // }
    // public function update(Request $request, $module, $cycle, $niveau)
    // {
    //     $request->validate([
    //         'intitule_module' => 'required|string|max:255',
    //         'heuresCours' => 'required|integer',
    //         'heuresTD' => 'required|integer',
    //         'heuresTP' => 'required|integer',
    //         'niveau' => 'required|string|max:255',
    //         // 'id_prof' => 'required|exists:profs,id',
    //         // 'id_semestre' => 'required|ex',
    //         // 'id_filiere' => 'required|exists:filieres,id',
    //     ]);
    //     // dd('hh');
    //     $module = Module::where('intitule_module', $request['intitule_module'])->where('niveau',$request['niveau'])->firstOrFail();
    //     // dd($request['intitule_filiere']);
    //     $filiere = Filiere::where('intitule_filiere', $request['intitule_filiere'])
    //     ->where('cycle', $request['cycle'])
    //     ->first();
        
    //     $prof = Professeur::where(DB::raw("CONCAT(nom, ' ', prenom)"), $request['responsable_module'])->first();
    //     $module->intitule_module = $request->input('intitule_module');
    //     $module->heuresCours = $request->input('heuresCours');
    //     $module->heuresTD = $request->input('heuresTD');
    //     $module->heuresTP = $request->input('heuresTP');
    //     $module->niveau = $request->input('niveau');
    //     $module->id_prof = $prof['id_prof'];
    //     $module->id_semestre = $filiere['id_semestre'];
    //     $module->id_filiere = $filiere['id_filiere'];
    //     dd($module);
    //     $module->save();
    //     return redirect()->back();
    // }

    /**
     * Remove the specified resource from storage.
     */
    }
    public function destroy(Module $module)
    {
        //
        $module->delete();
        return redirect()->back()->with('success', 'Modules supprimée avec succès!');
    }

    // public function delete(Request $request) {
        
    //     $niveau = $request->input('niveau');
    //     $filiere = $request->input('intitule');

    // // dd($filiere);
    // $mod=Module::where('niveau', $niveau)
    // ->where('intitule_Module', $filiere)->first();
    // // dd($mod['id']);
    //     Module::where('id',$mod['id'])->delete();
    //     // dd($var);
    // Alert::success('Module', 'Le module a été modifié avec succès');
        
    // return redirect()->back();
    //     // Votre logique de suppression du module ici
    // }
    
}
