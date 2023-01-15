<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Module;
use App\Models\Enseignant;
use App\Models\SceanceCour;
use Illuminate\Http\Request;
use App\Services\DateService;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreSceanceCourRequest;
use App\Http\Requests\UpdateSceanceCourRequest;

class SceanceCourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seance_cours = SceanceCour::all();

        return view('seance_cours.index', ['seance_cours' => $seance_cours]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules = Module::all();
        $classes = Classe::all();

        $enseignants = Enseignant::all();
        return view('seance_cours.form', ['modules' => $modules, 'classes' => $classes, 'enseignants' => $enseignants]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSceanceCourRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSceanceCourRequest $request)
    {
        $input = $request->all();
        $service = new DateService();
        $input['heure_debut'] = $service->convertDate($input['heure_debut']);
        SceanceCour::create($input);
        Alert::success('Success', 'Seance de cours ajoutée avec succès');
        return redirect()->route('seance_cours.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SceanceCour  $sceanceCour
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {


        $id = $request->query('id');
        $sceanceCour = SceanceCour::find($id);
        return view('seance_cours.show', ['sceanceCour' => $sceanceCour]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SceanceCour  $sceanceCour
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->query('id');
        $sceanceCour = SceanceCour::find($id);
        $modules = Module::all();
        $classes = Classe::all();

        $enseignants = Enseignant::all();
        return view('seance_cours.form', ['sceanceCour' => $sceanceCour, 'modules' => $modules, 'classes' => $classes, 'enseignants' => $enseignants]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSceanceCourRequest  $request
     * @param  \App\Models\SceanceCour  $sceanceCour
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSceanceCourRequest $request)
    {
        $sceanceCour = SceanceCour::find($request->query('id'));
        $input = $request->all();
        $sceanceCour->update($input);
        Alert::success('La seance a été modifié avec succès');
        return redirect()->route('seance_cours.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SceanceCour  $sceanceCour
     * @return \Illuminate\Http\Response
     */
    public function destroy(SceanceCour $sceanceCour)
    {
        $sceanceCour->delete();

        return redirect()->route('seance_cours.index')->with('success', 'La seance a été supprimé avec succès');
    }

    public function finishCourse(SceanceCour $sceanceCour)
    {

        $sceanceCour->etat = 1;
        $sceanceCour->save();
        Alert::success('La seance a été terminé avec succès', "Aucune autre abscence ne peut etre desormais enregistré pour cette seance");
        return redirect()->route('seance_cours.index');
    }
}
