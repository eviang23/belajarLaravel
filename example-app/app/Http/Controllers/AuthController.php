<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function IndexSubmit()
    {
        return view('auth.submit',
        ['title' => 'submit' ]) ;
    }

    public function IndexRegister()
    {
        return view('auth.register',
        ['title' => 'Register' ]) ;
    }
}
