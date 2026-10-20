<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function mostrarFormulario(){
        return view('login');
    }

public function processarLogin(Request $request) {
    $request->validate([
        'email' => 'required|email',
        'senha' => 'required|min:6',
    ], [
        'email.required' => 'O e-mail é obrigatório.',
        'email.email' => 'Digite um e-mail válido.',
        'senha.required' => 'A senha é obrigatória.',
        'senha.min' => 'A senha precisa ter no mínimo 6 caracteres.',
    ]);

    $credenciais = [
    'email' => $request->input('email'),
    'password' => $request->input('senha'),
    ];

    if (Auth::attempt($credenciais)) {
        $request->session()->regenerate();
        return redirect('/dashboard');
    } else {
            return back()->withErrors(['email' => 'Email ou senha incorretos.']);
        }
    }

    public function logout (Request $request) {
Auth::logout();
$request->session()->invalidate();
$request->session()->regenerateToken();

return redirect('/login');
    }
}
