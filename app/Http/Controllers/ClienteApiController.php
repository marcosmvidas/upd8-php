<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteApiController extends Controller
{
    public function index()
    {
        try {
            $clientes = Cliente::all();
            return response()->json($clientes);
        } catch (\Exception $e) {
            return response()->json(['erro' => 'Erro ao buscar as informações dos clientes', 'detalhes' => $e->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $cliente = Cliente::create($request->all());
            return response()->json($cliente, 201);
        } catch (\Exception $e) {
            return response()->json(['erro' => 'Erro ao salvar as informações do cliente: ' . $e->getMessage()], 500);
        }
    }

    public function show(Cliente $cliente)
    {
        try {
            return response()->json($cliente);
        } catch (\Exception $e) {
            return response()->json(['erro' => 'Erro ao buscar as informações do cliente'], 500);
        }
    }

    public function update(Request $request, Cliente $cliente)
    {
        try {
            $cliente->update($request->all());
            return response()->json($cliente);
        } catch (\Exception $e) {
            return response()->json(['erro' => 'Erro ao atualizar as informações do cliente'], 500);
        }
    }

    public function destroy(Cliente $cliente)
    {
        try {
            $cliente->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json(['erro' => 'Erro ao excluir o cliente'], 500);
        }
    }
}
