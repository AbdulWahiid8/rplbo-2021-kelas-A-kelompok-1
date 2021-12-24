<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Http\Requests\StoreSuratKeluarRequest;
use App\Http\Requests\UpdateSuratKeluarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staf.suratKeluar', [
            'data' => SuratKeluar::paginate(5)
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
        return view('staf.tambahSuratKeluar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSuratKeluarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getFile = $request->validate([
            'lampiran' => 'mimes:pdf|file|max:5024'
        ]);

        // Mengambil file dengan nama asli
        $getNameFile = $request->file('lampiran')->getClientOriginalName();
        // menyimpan file di folder file
        $getFile = $request->file('lampiran')->storeAs('file-surat', $getNameFile);

        SuratKeluar::create([
            'nama' => $request->nama,
            'nomor_surat' => $request->noSurat,
            'perihal' => $request->perihal,
            'tujuan' => $request->tujuan,
            'date' => $request->date,
            'lampiran' => $getFile
        ]);

        return redirect()
                ->route('suratkeluar.index')
                ->with('pesan', 'Surat Berhasil dikeluarkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('staf.detailSuratKeluar', [
            'data' => SuratKeluar::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check() && Auth::user()->role !== 'staf') {
            abort(403);
        }
        return view('staf.editSuratKeluar', [
            'data' => SuratKeluar::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSuratKeluarRequest  $request
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $getFile = $request->validate([
            'lampiran' => 'mimes:pdf,doc|file|max:5024'
        ]);

        // Mengambil file dengan nama asli
        $getNameFile = $request->file('lampiran')->getClientOriginalName();
        // menyimpan file di folder file
        $getFile = $request->file('lampiran')->storeAs('file-surat', $getNameFile);

        SuratKeluar::find($id)->update([
            'nama' => $request->nama,
            'nomor_surat' => $request->noSurat,
            'perihal' => $request->perihal,
            'tujuan' => $request->tujuan,
            'date' => $request->date,
            'lampiran' => $getFile
        ]);

        return redirect()->route('suratkeluar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SuratKeluar::find($id)->delete();

        return back();
    }
}
