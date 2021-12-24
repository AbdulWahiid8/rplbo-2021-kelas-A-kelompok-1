<?php

namespace App\Http\Controllers;

use App\Models\Legalisir;
use App\Models\Surat;
use Illuminate\Http\Request;

class StafLegalisirController extends Controller
{
    public function index()
    {
        return view('staf.legalisirMasuk', [
            'data' => Legalisir::paginate(5),
        ]);
    }

    public function edit($id)
    {
        return view('staf.editLegalisirMasuk', [
            'data' => Legalisir::find($id)
        ]);
    }

    public function create()
    {
        return view('staf.tambahLegalisirMasuk');
    }

    public function store(Request $request)
    {
        $getFile = $request->validate([
            'lampiran' => 'mimes:pdf|file|max:5024'
        ]);

        // Mengambil file dengan nama asli
        $getNameFile = $request->file('lampiran')->getClientOriginalName();
        // menyimpan file di folder file
        $getFile = $request->file('lampiran')->storeAs('file-surat', $getNameFile);

        Legalisir::create([
            'nama' => $request->namaLeges,
            'nis' => $request->nis,
            'nomor_telp' => $request->telepon,
            'email' => $request->email,
            'date' => $request->date,
            'perihal' => $request->perihal,
            'konfirmasi_leges' => $request->konfirmasi_leges,
            'lampiran' => $getFile
        ]);

        return redirect()
                ->route('legalisirmasuk.staf')
                ->with('pesan', 'Data Berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $getFile = $request->validate([
            'lampiran' => 'mimes:pdf,doc|file|max:5024'
        ]);

        // Mengambil file dengan nama asli
        $getNameFile = $request->file('lampiran')->getClientOriginalName();
        // menyimpan file di folder file
        $getFile = $request->file('lampiran')->storeAs('file-surat', $getNameFile);

        Legalisir::find($id)->update([
            'nama' => $request->namaLeges,
            'nis' => $request->nis,
            'nomor_telp' => $request->telepon,
            'email' => $request->email,
            'date' => $request->date,
            'perihal' => $request->perihal,
            'lampiran' => $getFile
        ]);

        return redirect()->route('legalisirmasuk.staf');
    }

    public function destroy($id)
    {
        Legalisir::find($id)->delete();

        return back();
    }
}
