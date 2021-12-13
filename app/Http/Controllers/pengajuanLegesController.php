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
        Legalisir::create([
            'nama' => $request->namaLeges,
            'nis' => $request->nis,
            'nomor_telp' => $request->telepon,
            'email' => $request->email,
            'date' => $request->date,
            'perihal' => $request->perihal,
            //'lampiran'
        ]);

        return redirect('/Dashboard')->with('message', 'Lampiran Legalisir Anda Akan Kami Proses');
    }
}
