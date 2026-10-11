<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Respuesta;

class PaginaController extends Controller
{
    public function index()
    {
        return view('inicio', [
            'fotos'      => Foto::latest()->take(60)->get(),
            'respuestas' => Respuesta::latest()->take(60)->get(),
        ]);
    }
}