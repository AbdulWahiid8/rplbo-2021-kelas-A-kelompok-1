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
        //dd('berhasil');
        Surat::create([
            'nama' => $request->namaSurat,
            'nis' => $request->nis,
            'email' => $request->email,
            'perihal' => $request->perihal,
            'nomor_surat' => $request->noSurat,
            'nomor_telp' => $request->telepon,
            'date' => $request->date
            // 'lampiran'
        ]);

        return redirect('/Dashboard')->with('message', 'Surat Anda Telah Kami Terima');
    }
}
