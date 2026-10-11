<?php

namespace App\Http\Controllers;

use App\Models\Respuesta;
use Illuminate\Http\Request;

class RespuestaController extends Controller
{
    public function store(Request $request)
    {
        $datos = $request->validateWithBag('respuesta', [
            'autor'      => 'nullable|string|max:60',
            'acciones'   => 'nullable|array|max:6',
            'acciones.*' => 'string|max:200',
            'texto'      => 'required|string|min:10|max:600',
        ], [
            'texto.required' => 'Escribí tu respuesta.',
            'texto.min'      => 'Escribí al menos 10 caracteres.',
            'texto.max'      => 'Máximo 600 caracteres.',
        ]);

        Respuesta::create([
            'autor'    => $datos['autor'] ?? null,
            'acciones' => $datos['acciones'] ?? [],
            'texto'    => $datos['texto'],
        ]);

        return redirect(route('inicio') . '#mural-respuestas')
            ->with('ok_respuesta', '¡Gracias! Tu respuesta se sumó al mural.');
    }
}