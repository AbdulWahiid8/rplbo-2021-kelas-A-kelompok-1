<?php

namespace App\Http\Controllers;

use App\Models\LegalisirKeluar;
use App\Http\Requests\StoreLegalisirKeluarRequest;
use App\Http\Requests\UpdateLegalisirKeluarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LegalisirKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staf.legalisirKeluar', [
            'data' => LegalisirKeluar::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check() && Auth::user()->role !== 'staf') {
            abort(403);
        }

        return view('staf.tambahLegalisirKeluar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLegalisirKeluarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getFile = $request->validate([
            'lampiran' => 'mimes:pdf,doc|file|max:5024'
        ]);

        // Mengambil file dengan nama asli
        $getNameFile = $request->file('lampiran')->getClientOriginalName();
        // menyimpan file di folder file
        $getFile = $request->file('lampiran')->storeAs('file-surat', $getNameFile);
        LegalisirKeluar::create([
            'nama' => $request->namaLeges,
            'nis' => $request->nis,
            'email' => $request->email,
            'date' => $request->date,
            'lampiran' => $getFile,
        ]);

        return redirect()
                ->route('legalisirkeluar.index')
                ->with('pesan', 'Data Legalisir Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LegalisirKeluar  $legalisirKeluar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('staf.detailLegalisirKeluar', [
            'data' => LegalisirKeluar::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LegalisirKeluar  $legalisirKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('staf.editLegalisirKeluar', [
            'data' => LegalisirKeluar::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLegalisirKeluarRequest  $request
     * @param  \App\Models\LegalisirKeluar  $legalisirKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        LegalisirKeluar::find($id)->update([
            'nama' => $request->namaLeges,
            'nis' => $request->nis,
            'email' => $request->email,
            'date' => $request->date,
        ]);

        return redirect()
                ->route('legalisirkeluar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LegalisirKeluar  $legalisirKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LegalisirKeluar::find($id)->delete();

        return back();
    }
}
