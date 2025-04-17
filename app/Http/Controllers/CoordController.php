<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coordenada;  

class CoordController extends Controller
{
    public function store(Request $request)
    {
        // Validando os dados recebidos
        $request->validate([
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'nome' => 'required|string|max:255', // Validação para o nome
        ]);

        // Criando a nova coordenada
        $coordenada = Coordenada::create([
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'nome' => $request->nome, // Salvando o nome
        ]);

        // Retornando a coordenada recém-criada
        return response()->json($coordenada, 201);
    }

    // GET: Retornar todas as coordenadas
    public function index()
    {
        // Recuperando todas as coordenadas, incluindo os nomes
        $coordenada = Coordenada::all();
        return response()->json($coordenada);
    }
}
