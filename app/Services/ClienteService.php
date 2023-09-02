<?php

namespace App\Services;

use App\Models\Cliente;
use App\Enums\GeneroEnum;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class ClienteService
{
    public function createCliente(array $data)
    {
        return Cliente::create($data);
    }

    public function updateCliente(Cliente $cliente, array $data)
    {
        $cliente->update($data);
    }

    public function deleteCliente(Cliente $cliente)
    {
        $cliente->delete();
    }

    public function storeCliente(array $data)
    {
        $validator = Validator::make($data, [
            'cpf' => 'required|unique:clientes,cpf',
            'nome' => 'required',
            'data_nascimento' => 'nullable|date',
            'sexo' => [
                'required',
                Rule::in(GeneroEnum::toValues()),
            ],
            'endereco' => 'nullable',
            'estado' => 'nullable',
            'cidade' => 'nullable',
        ]);

        if ($validator->fails()) {
            return null;
        }

        try {
            return Cliente::create($data);
        } catch (\Exception $e) {
            return null;
        }
    }
}
