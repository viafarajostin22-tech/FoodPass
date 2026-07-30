<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuDigitalController extends Controller
{
    public function index()
    {
        $usuario = Auth::user();
        return view('men_digital_foodpass.menu_digital', compact('usuario'));
    }
}
