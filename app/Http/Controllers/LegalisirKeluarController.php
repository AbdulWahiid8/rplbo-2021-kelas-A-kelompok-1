<?php

namespace App\Http\Controllers;

use App\Models\LegalisirKeluar;
use App\Http\Requests\StoreLegalisirKeluarRequest;
use App\Http\Requests\UpdateLegalisirKeluarRequest;

class LegalisirKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staf.legalisirKeluar');
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
     * @param  \App\Http\Requests\StoreLegalisirKeluarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLegalisirKeluarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LegalisirKeluar  $legalisirKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(LegalisirKeluar $legalisirKeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LegalisirKeluar  $legalisirKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(LegalisirKeluar $legalisirKeluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLegalisirKeluarRequest  $request
     * @param  \App\Models\LegalisirKeluar  $legalisirKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLegalisirKeluarRequest $request, LegalisirKeluar $legalisirKeluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LegalisirKeluar  $legalisirKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(LegalisirKeluar $legalisirKeluar)
    {
        //
    }
}
