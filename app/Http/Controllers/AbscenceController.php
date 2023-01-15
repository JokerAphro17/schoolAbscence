<?php

namespace App\Http\Controllers;

use App\Models\Abscence;
use App\Http\Requests\StoreAbscenceRequest;
use App\Http\Requests\UpdateAbscenceRequest;
use App\Models\Classe;
use App\Models\SceanceCour;
use RealRashid\SweetAlert\Facades\Alert;

class AbscenceController extends Controller
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
        return view('abscences.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAbscenceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAbscenceRequest $request)
    {
        $input = $request->all();
        $abscents = $input['abscences'] ?? [];

        foreach ($abscents as $abscent) {

            if (!Abscence::where('sceance_cour_id', $input['sceance_cour_id'])->where('eleve_id', $abscent)->exists()) {
                $input['eleve_id'] = $abscent;
                Abscence::create($input);
            }
        }

        $all_abscent = Abscence::where('sceance_cour_id', $input['sceance_cour_id'])->get();
        foreach ($all_abscent as $abscent) {
            if (!in_array($abscent->eleve_id, $abscents)) {
                $abscent->delete();
            }
        }
        Alert::success('Abscence', 'Abscence enregistrée avec succès');

        return redirect()->route('abscences.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Abscence  $abscence
     * @return \Illuminate\Http\Response
     */
    public function show(Abscence $abscence)
    {
        return view('abscences.show', ['abscence' => $abscence]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Abscence  $abscence
     * @return \Illuminate\Http\Response
     */
    public function edit(Abscence $abscence)
    {
        return view('abscences.form', ['abscence' => $abscence]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAbscenceRequest  $request
     * @param  \App\Models\Abscence  $abscence
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAbscenceRequest $request, Abscence $abscence)
    {
        $input = $request->all();
        return redirect()->route('abscences.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abscence  $abscence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abscence $abscence)
    {
        $abscence->delete();

        return redirect()->route('abscences.index')->with('success', 'Abscence a été supprimé avec succès');
    }
}
