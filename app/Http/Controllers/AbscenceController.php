<?php

namespace App\Http\Controllers;

use App\Models\Abscence;
use App\Http\Requests\StoreAbscenceRequest;
use App\Http\Requests\UpdateAbscenceRequest;

class AbscenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAbscenceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAbscenceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Abscence  $abscence
     * @return \Illuminate\Http\Response
     */
    public function show(Abscence $abscence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Abscence  $abscence
     * @return \Illuminate\Http\Response
     */
    public function edit(Abscence $abscence)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abscence  $abscence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abscence $abscence)
    {
        //
    }
}
