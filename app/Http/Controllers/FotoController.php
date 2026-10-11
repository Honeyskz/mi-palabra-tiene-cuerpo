<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function store(Request $request)
    {
        $datos = $request->validateWithBag('foto', [
            'nombre' => 'nullable|string|max:60',
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ], [
            'imagen.required' => 'Elegí una foto.',
            'imagen.image'    => 'El archivo debe ser una imagen.',
            'imagen.mimes'    => 'Formatos permitidos: JPG, PNG o WEBP.',
            'imagen.max'      => 'La foto no puede pesar más de 5 MB.',
        ]);

        Foto::create([
            'nombre' => $datos['nombre'] ?? null,
            'imagen' => $request->file('imagen')->store('mural', 'public'),
        ]);

        return redirect(route('inicio') . '#mural-fotos')
            ->with('ok_foto', '¡Tu foto ya está en el mural!');
    }
}