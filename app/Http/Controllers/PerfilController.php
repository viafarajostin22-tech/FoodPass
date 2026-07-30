<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function index()
    {
        $usuario = Auth::user();
        return view('mi_perfil_foodpass.perfil', compact('usuario'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        Auth::user()->update($request->only('name', 'email'));

        return back()->with('success', 'Perfil actualizado correctamente.');
    }
}
