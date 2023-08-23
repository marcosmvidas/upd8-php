<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteViewController extends Controller
{
    public function index(Request $request)
    {
        $query = Cliente::query()
        ->when($request->input('cpf'), fn ($query, $cpf) => $query->where('cpf', 'LIKE', "%$cpf%"))
        ->when($request->input('nome'), fn ($query, $nome) => $query->where('nome', 'LIKE', "%$nome%"))
        ->when($request->input('data_nascimento'), fn ($query, $dataNascimento) => $query->where('data_nascimento', 'LIKE', "%$dataNascimento%"))
        ->when($request->input('estado'), fn ($query, $estado) => $query->where('estado', 'LIKE', "%$estado%"))
        ->when($request->input('cidade'), fn ($query, $cidade) => $query->where('cidade', 'LIKE', "%$cidade%"))
        ->when($request->input('sexo'), fn ($query, $sexo) => $query->where('sexo', $sexo));

        $clientes = $query->paginate(3);

        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        Cliente::create([
            'cpf' => $request->cpf,
            'nome' => $request->nome,
            'data_nascimento' => $request->data_nascimento,
            'sexo' => $request->sexo,
            'endereco' => $request->endereco,
            'estado' => $request->estado,
            'cidade' => $request->cidade,
        ]);

        return redirect()->action([ClienteViewController::class, 'index'])->with('success', 'Cliente criado com sucesso!');
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    // public function update(Request $request, string $id)
    public function update(Request $request, Cliente $cliente)
    {
        $updated = $cliente->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->action([ClienteViewController::class, 'index'])->with('message', 'Alteração feita com sucesso!');
        }

        return redirect()->action([ClienteViewController::class, 'index'])->with('message', 'Erro ao reslizar alteração.');

    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->action([ClienteViewController::class, 'index'])->with('message', 'Cliente excluído com sucesso.');
    }

    // public function destroy(Cliente $cliente)
    // {
    //     $cliente->update(['status' => 'Inativo']);
    //     return redirect()->route('clientes.index')->with('success', 'Cliente inativado com sucesso.');
    // }
}
