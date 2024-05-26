<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use App\Events\PreparationCreated;
use App\Models\PreparationSequence;
use Illuminate\Foundation\Auth\User;
use App\Notifications\NewPreparationNotification;

class PreparationSequenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preparationSequences = PreparationSequence::all();
        return view('preparation_sequences.index', compact('preparationSequences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules = Module::all();
        $users = User::all();
        return view('preparation_sequences.create', compact('modules', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'preparation' => 'required|unique:preparation_sequences|max:255',
            'heure' => 'required|date_format:H:i',
            'entier' => 'required|integer',
            'type_espace_formation' => 'required|max:200',
            'objectif_sequence' => 'required|max:200',
            'contenu_rappel' => 'required',
            'duree_rappel' => 'required|integer',
            'motivation' => 'required',
            'duree_motiv' => 'required|integer',
            'plan' => 'required',
            'duree_plan' => 'required|integer',
            'developpement1' => 'required',
            'mthod_pedagog_dev1' => 'required|max:200',
            'duree_dev1' => 'required|integer',
            'developpement2' => 'required',
            'mthod_pedagog_dev2' => 'required|max:200',
            'duree_dev2' => 'required|integer',
            'developpement3' => 'required',
            'mthod_pedagog_dev3' => 'required|max:200',
            'duree_dev3' => 'required|integer',
            'synthese' => 'required',
            'duree_synthese' => 'required|integer',
            'evaluation' => 'required',
            'duree_evaluation' => 'required|integer',
            'connexion' => 'required',
            'module_id' => 'required|exists:modules,id',
            'user_id' => 'required|exists:users,id',
        ]);

        PreparationSequence::create($request->all());
        // event(new PreparationCreated($preparationSequence));

        // Notify users
        // $users = User::all();
        // foreach ($users as $user) {
        //     $user->notify(new NewPreparationNotification($preparation));
        // }

        return redirect()->route('preparation_sequences.index')
            ->with('success', 'Preparation sequence created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PreparationSequence  $preparationSequence
     * @return \Illuminate\Http\Response
     */
    public function show(PreparationSequence $preparationSequence)
    {
        return view('preparation_sequences.show', compact('preparationSequence'));
    }


    public function printIndex()
    {
        $preparationSequences = PreparationSequence::all();
        return view('preparation_sequences.print', compact('preparationSequences'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PreparationSequence  $preparationSequence
     * @return \Illuminate\Http\Response
     */
    public function edit(PreparationSequence $preparationSequence)
    {
        $modules = Module::all();
        $users = User::all();
        return view('preparation_sequences.edit', compact('preparationSequence', 'modules', 'users'));
    }

    public function update(Request $request, PreparationSequence $preparationSequence)
    {
        $request->validate([
            'preparation' => 'required|max:255|unique:preparation_sequences,preparation,' . $preparationSequence->id,
            'heure' => 'required|date_format:H:i',
            'entier' => 'required|integer',
            'type_espace_formation' => 'required|max:200',
            'objectif_sequence' => 'required|max:200',
            'contenu_rappel' => 'required',
            'duree_rappel' => 'required|integer',
            'motivation' => 'required',
            'duree_motiv' => 'required|integer',
            'plan' => 'required',
            'duree_plan' => 'required|integer',
            'developpement1' => 'required',
            'mthod_pedagog_dev1' => 'required|max:200',
            'duree_dev1' => 'required|integer',
            'developpement2' => 'required',
            'mthod_pedagog_dev2' => 'required|max:200',
            'duree_dev2' => 'required|integer',
            'developpement3' => 'required',
            'mthod_pedagog_dev3' => 'required|max:200',
            'duree_dev3' => 'required|integer',
            'synthese' => 'required',
            'duree_synthese' => 'required|integer',
            'evaluation' => 'required',
            'duree_evaluation' => 'required|integer',
            'connexion' => 'required',
            'module_id' => 'required|exists:modules,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $preparationSequence->update($request->all());

        return redirect()->route('preparation_sequences.index')
            ->with('success', 'Preparation sequence updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PreparationSequence  $preparationSequence
     * @return \Illuminate\Http\Response
     */
    public function destroy(PreparationSequence $preparationSequence)
    {
        $preparationSequence->delete();

        return redirect()->route('preparation_sequences.index')
            ->with('success', 'Preparation sequence deleted successfully.');
    }

    /**
     * Get preparations by module ID.
     *
     * @param  int  $moduleId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPreparations($moduleId)
    {
        $preparations = PreparationSequence::where('module_id', $moduleId)->get();
        return response()->json($preparations);
    }
}
