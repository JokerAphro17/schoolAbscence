<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Filiere;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreClasseRequest;
use App\Http\Requests\UpdateClasseRequest;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classe::all();

        return view('classes.index', ['classes' => $classes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $filieres = Filiere::all();
        return view('classes.form', ['filieres' => $filieres]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClasseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClasseRequest $request)
    {
        $input = $request->all();

        Classe::create($input);
        Alert::sucess('success', 'Classe enregistré avec succès.');
        return redirect()->route('classes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe)
    {
        $sceances = $classe->sceance_cours;
        $absences = $classe->absences;
        $classModules = [];
        foreach ($sceances as $sceance) {
            if (!in_array($sceance->module, $classModules)) {
                $classModules[] = $sceance->module;
            }
        }


        return view('classes.show', ['classe' => $classe, 'modules' => $classModules, 'absences' => $absences]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit(Classe $classe)
    {
        $filieres = Filiere::all();
        return view('classes.form', ['classe' => $classe, 'filieres' => $filieres]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClasseRequest  $request
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClasseRequest $request, Classe $classe)
    {
        $input = $request->all();
        $classe->update($input);
       Alert::sucess('success', 'La Classe a été modifié avec succès');
        return redirect()->route('classes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
        $classe->delete();

        return redirect()->route('classes.index')->with('success', 'Classe a été supprimé avec succès');
    }
}
