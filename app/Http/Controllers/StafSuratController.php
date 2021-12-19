<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class StafSuratController extends Controller
{
    public function index()
    {
        return view('staf.suratMasuk', [
            'data' => Surat::all(),
        ]);
    }

    public function edit($id)
    {
        return view('staf.editSuratMasuk',[
            'data' => Surat::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        // $data = $request->all();
        Surat::find($id)->update([
            'nama' => $request->namaSurat,
            'nis' => $request->nis,
            'email' => $request->email,
            'perihal' => $request->perihal,
            'nomor_surat' => $request->noSurat,
            'nomor_telp' => $request->telepon,
            'date' => $request->date
        ]);

        return redirect()->route('suratmasuk.staf');
    }

    public function destroy($id)
    {
        Surat::find($id)->delete();

        return back();
    }
}
