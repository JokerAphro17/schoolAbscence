<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreEnseignantRequest;
use App\Http\Requests\UpdateEnseignantRequest;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enseignants = Enseignant::all();

        return view('enseignants.index', ['enseignants' => $enseignants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enseignants.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEnseignantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnseignantRequest $request)
    {
        $input = $request->all();

        Enseignant::create($input);
        Alert::sucess('success', 'Enseignant created successfully.');
        return redirect()->route('enseignants.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function show(Enseignant $enseignant)
    {
        return view('enseignants.show', ['enseignant' => $enseignant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function edit(Enseignant $enseignant)
    {
        return view('enseignants.form', ['enseignant' => $enseignant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnseignantRequest  $request
     * @param  \App\Models\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnseignantRequest $request, Enseignant $enseignant)
    {
        $input = $request->all();
        $enseignant->update($input);
        Alert::sucess('success', 'Enseignant a été modifié avec succès');
        return redirect()->route('enseignants.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enseignant $enseignant)
    {
        $enseignant->delete();

        return redirect()->route('enseignants.index')->with('success', 'Enseignant a été supprimé avec succès');
    }
}
