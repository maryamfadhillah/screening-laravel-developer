<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials))
        {
        $request->user()->createToken($request->input('username'));
        return redirect('admin');
        }


        return redirect('login')->with('error', 'Username atau password salah.');
    }

    public function registrasi()
    {
        return view('auth.register');
    }

    public function postRegistrasi(Request $request)
    {
        $request->validate(
        [
            'username' => 'required|unique:users',
            'password' => 'required|min:4',
        ], 
        [
            'username.unique' => 'Maaf registrasi gagal, username sudah digunakan.',
            'password.min'    => 'Maaf registrasi gagal, password minimal 4 digit.',
        ]);
        
        User::create([
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect('login')->with('message', 'Akun berhasil dibuat, silahkan login.');
    }
}
