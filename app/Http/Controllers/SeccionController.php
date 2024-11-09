<?php

namespace App\Http\Controllers;

use App\Models\Seccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SeccionController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:seccion',
            'password' => 'required|min:6'  // Validación para contraseña más segura
        ]);
    
        // Crear el usuario, asegurando que la contraseña esté cifrada
        Seccion::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'password' => Hash::make($request->password),  // Cifrar la contraseña
        ]);
    
        return redirect()->route('inicio')->with('message', 'Bienvenido, ' . $request->nombre);
    }
    

    public function login(Request $request)
    {
        $user = Seccion::where('nombre', $request->nombre)
                ->where('password', $request->password)
                ->first();

        if ($user) {
            return redirect()->route('inicio')->with('message', 'Bienvenido, ' . $user->nombre);
        } else {
            return redirect()->back()->withErrors(['message' => 'USUARIO, por favor regístrate']);
        }
    }
}