<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        return view('kepalaTU.kelolaPengguna', [
            'data' => User::paginate(10)
        ]);
    }

    public function create()
    {
        return view('kepalaTU.tambahPengguna');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'min:8']
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'role' => $request->role,
            'password' => Hash::make($request->password)
        ]);

        return redirect()
                ->route('kelolapengguna.index')
                ->with('pesan', 'Pengguna Baru Berhasil ditambahkan');
    }

    public function edit($id)
    {
        return view('kepalaTU.editKelolaPengguna', [
            'data' => User::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {

        User::find($id)->update([
            'username' => $request->username,
            'name' => $request->name,
            'role' => $request->role,
        ]);

        return redirect()->route('kelolapengguna.index');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return back();
    }
}
