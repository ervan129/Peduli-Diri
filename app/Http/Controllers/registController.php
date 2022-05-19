<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class registController extends Controller
{
    public function regist()
    {
        return view('auth.register');
    }

    public function registUser(Request $request)
    {
        $validated = Validator::make(
            $request->all(),
            [
                'email' => 'required|unique:users|numeric|digits:16',
                'nama' => 'required|min:5|max:255',
            ],
            [
                'email.unique' => 'NIK sudah terdaftar',
                'nama.required' => 'Nama tidak boleh kosong'
            ]
        )->validate();

        $validatedData = [
            "nama" => $validated['nama'],
            "email" => $validated['email'],
            "password" => bcrypt($validated['email'])
        ];

        // dd($validatedData);
        User::create($validatedData);
        return redirect('/')->with('success', 'Registrasi berhasil. Silahkan login!');
    }
}
