<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function IndexLogin()
    {
        return view(
            'auth.f_login',
            ['title' => 'login']
        );
    }

    public function IndexRegister()
    {
        return view(
            'auth.f_Register',
            ['title' => 'Register']
        );
    }

    public function IndexSubmit()
    {
        return view(
            'auth.submit',
            ['title' => 'submit']
        );
    }

    public function storeRegister(Request $request)
    {
        //validation
        $validatedData = $request->validate(
            [
                "name" => "required|min:3|max:30",
                "email" => "required|email:dns|unique:users|lowercase ", /*  users : nama tabel*/
                "password" => "required|min:8|confirmed", /* confirmed mengecek password dngn bwh nya password confirmed  sama atau tidak*/
                "password_confirmation" => "required|min:8",
            ],
            [
                "name.required" => "Nama Tidak Boleh Kosong !!",
                "email.required" => "Email Tidak Boleh Kosong !!",
                "email.unique" => "Email Sudah Ada !!",
                "password.required" => "Password Tidak Boleh Kosong !!",
                "password.confirmed" => "Password Harus Sama !!",
                "password_confirmation.required" => "Konfirmasi Password Tidak Boleh Kosong !!",
                "name.min" => "Nama harus lebih dari 3 karakter",
            ]

        );

        /* untuk enkripsi Passwrod */
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect("/auth/login");
    }

    public function storeLogin(Request $request)
    {

        $credentials = $request->validate([
            "email" => "required|email",
            "password" => "required|min:8",
        ]);


        /* Cek credential*/

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return back()->with("login-error", "Email atau Password salah !!");
    }

    public function storeLogout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerateToken();
        $request->session()->invalidate();

        return redirect()->intended('/auth/login');

    }



}
