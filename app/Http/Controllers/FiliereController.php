<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Http\Requests\StoreFiliereRequest;
use App\Http\Requests\UpdateFiliereRequest;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filieres = Filiere::all();

        return view('filieres.index', ['filieres' => $filieres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filieres.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFiliereRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFiliereRequest $request)
    {
        $input = $request->all();

        Filiere::create($input);
        $request->session()->flash('success', 'Filiere created successfully.');
        return redirect()->route('filieres.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function show(Filiere $filiere)
    {
        return view('filieres.show', ['filiere' => $filiere]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Filiere $filiere)
    {

        return view('filieres.form', ['filiere' => $filiere]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFiliereRequest  $request
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFiliereRequest $request, Filiere $filiere)
    {

        $input = $request->all();
        $filiere->update($input);
        $request->session()->flash('success', 'Filiere a été modifié avec succès');
        return redirect()->route('filieres.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filiere $filiere)
    {
        $filiere->delete();

        return redirect()->route('filieres.index')->with('success', 'Filiere a été supprimé avec succès');
    }
}
