<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistorialController extends Controller
{
    public function index()
    {
        $usuario = Auth::user();
        return view('historial_foodpass.historial', compact('usuario'));
    }
}
