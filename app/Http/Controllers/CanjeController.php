<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CanjeController extends Controller
{
    public function index()
    {
        $usuario = Auth::user();
        return view('canje_foodpass.canje', compact('usuario'));
    }
}
