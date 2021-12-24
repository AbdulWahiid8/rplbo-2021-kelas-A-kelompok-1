<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UpdatePasswordController extends Controller
{
    public function edit($id)
    {
        return view('kepalaTU.editPassword',[
            'data' => User::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'password_lama' => ['required'],
            'password' => ['required', 'min:8'],
        ]);

        // Mengecek password sebelumnya atau password lama benar atau tidak
        if (Hash::check($request->password_lama, Auth::user()->password)) {
            User::find($id)->update([
                'password' => Hash::make($request->password)
            ]);

            return redirect()
                ->route('kelolapengguna.index')
                ->with('pesan', 'Password Berhasil Di Update');
        }

        throw ValidationException::withMessages([
            'password_lama' => 'Opss! Password anda salah',
        ]);
        // User::find($id)->update([

        // ]);

    }
}
