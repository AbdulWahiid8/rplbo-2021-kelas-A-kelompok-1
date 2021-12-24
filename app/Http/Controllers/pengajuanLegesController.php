<?php

namespace App\Http\Controllers;

use App\Models\Legalisir;
use Illuminate\Http\Request;

class pengajuanLegesController extends Controller
{
    public function index()
    {
        return view('pengguna.pengajuanLeges');
    }

    public function create(Request $request)
    {
        $getFile = $request->validate([
            'lampiran' => 'mimes:pdf,doc|file|max:5024'
        ]);

        // Mengambil file dengan nama asli
        $getNameFile = $request->file('lampiran')->getClientOriginalName();
        // menyimpan file di folder file
        $getFile = $request->file('lampiran')->storeAs('file-legalisir', $getNameFile);

        Legalisir::create([
            'nama' => $request->namaLeges,
            'nis' => $request->nis,
            'nomor_telp' => $request->telepon,
            'email' => $request->email,
            'date' => $request->date,
            'perihal' => $request->perihal,
            'lampiran' => $getFile
        ]);

        return redirect('/Dashboard')->with('message', 'Lampiran Legalisir Anda Akan Kami Proses');
    }
}
