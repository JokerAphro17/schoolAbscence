<?php

namespace App\Http\Controllers;

use App\Models\SceanceCour;
use App\Http\Requests\StoreSceanceCourRequest;
use App\Http\Requests\UpdateSceanceCourRequest;
use App\Models\Classe;
use App\Models\Enseignant;
use App\Models\Module;

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
        return view('seance_cours.form',['modules'=>$modules, 'classes'=>$classes, 'enseignants'=>$enseignants]);
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

        SceanceCour::create($input);
        $request->session()->flash('success', 'La seance a ete crée avec succès.');
        return redirect()->route('seance_cours.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SceanceCour  $sceanceCour
     * @return \Illuminate\Http\Response
     */
    public function show(SceanceCour $sceanceCour)
    {
        return view('seance_cours.show', ['sceanceCour' => $sceanceCour]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SceanceCour  $sceanceCour
     * @return \Illuminate\Http\Response
     */
    public function edit(SceanceCour $sceanceCour)
    {
        return view('seance_cours.form', ['sceanceCour' => $sceanceCour]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSceanceCourRequest  $request
     * @param  \App\Models\SceanceCour  $sceanceCour
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSceanceCourRequest $request, SceanceCour $sceanceCour)
    {
        $input = $request->all();
        $sceanceCour->update($input);
        $request->session()->flash('success', 'La seance a été modifié avec succès');
        return redirect()->route('seance_cour.index');
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
}
