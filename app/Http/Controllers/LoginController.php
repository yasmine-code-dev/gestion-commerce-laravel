<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Auth as AttributesAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    public function show()
    {
        return view('login.show');
    }
    public function login(Request $request)
    {
        // login logic

        $login = $request->email;
        $password = $request->password;
        $credentials = ['email' => $login, 'password' => $password];
         if (Auth::attempt($credentials)) {
             // conected
             $request->session()->regenerate();
            return to_route('clients.index')->with('success', 'Vous êtes connecté avec succès.');
         } else {
            // not conected
             return back()->withErrors([
                 'email' => 'Email ou mot de passe incorrect.',
             ])->onlyInput('email');
         }
    }

    public function logout(Request $request)
    {
        // logout logic
        Session::flush();
        Auth::logout();
        return to_route('login.show')->with('success', 'Vous êtes déconnecté avec succès.');
    }
}
