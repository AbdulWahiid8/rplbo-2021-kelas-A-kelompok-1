<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class pengajuanSuratController extends Controller
{
    public function index()
    {
        return view('pengguna.pengajuanSurat');
    }

    public function create(Request $request)
    {
        $getFile = $request->validate([
            'lampiran' => 'mimes:pdf,doc|file|max:5024'
        ]);

        // Mengambil file dengan nama asli
            $getNameFile = $request->file('lampiran')->getClientOriginalName();
        // menyimpan file di folder file
            $getFile = $request->file('lampiran')->storeAs('file-surat', $getNameFile);

        //dd('berhasil');
        Surat::create([
            'nama' => $request->namaSurat,
            'nis' => $request->nis,
            'email' => $request->email,
            'perihal' => $request->perihal,
            'nomor_surat' => $request->noSurat,
            'nomor_telp' => $request->telepon,
            'date' => $request->date,
            'lampiran' => $getFile
        ]);

        return redirect('/Dashboard')->with('message', 'Surat Anda Telah Kami Terima');
    }
}
