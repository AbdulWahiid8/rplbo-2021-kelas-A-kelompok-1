<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class StafSuratController extends Controller
{
    public function index()
    {
        return view('staf.suratMasuk', [
            'data' => Surat::paginate(5),
        ]);
    }

    public function create()
    {
        return view('staf.tambahSuratMasuk');
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

        Surat::create([
            'nama' => $request->namaSurat,
            'nis' => $request->nis,
            'email' => $request->email,
            'perihal' => $request->perihal,
            'nomor_surat' => $request->noSurat,
            'nomor_telp' => $request->telepon,
            'date' => $request->date,
            'konfirmasi_surat' => $request->konfirmasi_surat,
            'lampiran' => $getFile
        ]);

        return redirect()
                ->route('suratmasuk.staf')
                ->with('pesan', 'Surat Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        return view('staf.editSuratMasuk',[
            'data' => Surat::find($id)
        ]);
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

        // $data = $request->all();
        Surat::find($id)->update([
            'nama' => $request->namaSurat,
            'nis' => $request->nis,
            'email' => $request->email,
            'perihal' => $request->perihal,
            'nomor_surat' => $request->noSurat,
            'nomor_telp' => $request->telepon,
            'date' => $request->date,
            'lampiran' => $getFile
        ]);

        return redirect()->route('suratmasuk.staf');
    }

    public function destroy($id)
    {
        Surat::find($id)->delete();

        return back();
    }
}
