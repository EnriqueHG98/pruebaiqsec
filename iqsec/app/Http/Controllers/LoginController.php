<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\beneficios;
//use App\Models\usuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginUser(Request $request) //Iniciamos sesion con las credenciales y Attempt
    {
        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('privada'));
        } else {
            return redirect('login');
        }
    }

    public function listarBenef()
    {
        $data = beneficios::get();
        return view('prueba', ['view' => 'prueba'])->with(compact('data'));
    }

    public function logout(Request $request) //Cerramos sesion logout()
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
