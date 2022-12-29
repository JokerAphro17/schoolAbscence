<?php

namespace App\Http\Controllers;

use App\Models\SceanceCour;
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
        //
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
     * @param  \App\Http\Requests\StoreSceanceCourRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSceanceCourRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SceanceCour  $sceanceCour
     * @return \Illuminate\Http\Response
     */
    public function show(SceanceCour $sceanceCour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SceanceCour  $sceanceCour
     * @return \Illuminate\Http\Response
     */
    public function edit(SceanceCour $sceanceCour)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SceanceCour  $sceanceCour
     * @return \Illuminate\Http\Response
     */
    public function destroy(SceanceCour $sceanceCour)
    {
        //
    }
}
