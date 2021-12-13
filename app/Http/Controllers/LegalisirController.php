<?php

namespace App\Http\Controllers;

use App\Models\Legalisir;
use App\Http\Requests\StoreLegalisirRequest;
use App\Http\Requests\UpdateLegalisirRequest;

class LegalisirController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLegalisirRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLegalisirRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Legalisir  $legalisir
     * @return \Illuminate\Http\Response
     */
    public function show(Legalisir $legalisir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Legalisir  $legalisir
     * @return \Illuminate\Http\Response
     */
    public function edit(Legalisir $legalisir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLegalisirRequest  $request
     * @param  \App\Models\Legalisir  $legalisir
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLegalisirRequest $request, Legalisir $legalisir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Legalisir  $legalisir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Legalisir $legalisir)
    {
        //
    }
}
