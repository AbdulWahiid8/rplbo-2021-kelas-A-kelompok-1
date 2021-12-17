<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\Models\Surat::get();

        return view('resepsionis.suratMasuk',[
            'data' => $data
        ]);
    }

    public function detail($id)
    {
        //dd($surat);
        // $surat = \App\Models\Surat::get();
        return view('resepsionis.detailSuratMasuk', [
            'surat' => Surat::find($id),
        ]);
    }

    public function confirm(Request $request)
    {
        // Surat::create([
        //     'konfirmasi_surat' => $request->konfirmasi_surat
        // ]);
        $confirm = $request->validate([
            'konfirmasi_surat' => 'confirmed'
        ]);
        // update($confirm);
        Surat::where('nama', 'Dinas Pendidikan')->update($confirm);

        return redirect()->route('suratmasuk');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
