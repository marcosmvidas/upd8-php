@extends('componente.layout')

@section('content')
    <div class="container">
<div style="background-color: #f8f9fa; padding: 20px;">
    <div style="background-color: #ffffff; padding: 15px; border-radius: 5px; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);">
        <h2 style="margin-bottom: 15px;">Consulta de Cliente</h2>
        <form>
            <div style="display: flex; flex-direction: row; gap: 15px;">
                <div style="flex: 1;">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" class="form-control">
                </div>
                <div style="flex: 1;">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" class="form-control">
                </div>
                <div style="flex: 1;">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="text" id="data_nascimento" name="data_nascimento" class="form-control">
                </div>
                <div style="flex: 1;">
                    <label>Sexo:</label>
                    <div>
                        <input type="radio" id="masculino" name="sexo" value="masculino">
                        <label for="masculino">Masculino</label>
                    </div>
                    <div>
                        <input type="radio" id="feminino" name="sexo" value="feminino">
                        <label for="feminino">Feminino</label>
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-top: 15px;">
                <div style="flex: 1;">
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" class="form-control">
                </div>
                <div style="flex: 1;">
                    <label for="estado">Estado:</label>
                    <select id="estado" name="estado" class="form-select"></select>
                </div>
                <div style="flex: 1; text-align: right;">
                    <button class="btn btn-primary">Pesquisar</button>
                    <button class="btn btn-secondary">Limpar</button>
                </div>
            </div>
        </form>
    </div>
</div>

        <h1 class="mt-4">Resultado da Pesquisa</h1>
        <table class="table table-striped table-bordered mt-3">
            <thead>
                <tr>
                    <th class="text-center" colspan="2">Ações</th>
                    <th>Cliente</th>
                    <th>CPF</th>
                    <th>Data Nasc</th>
                    <th>Estado</th>
                    <th>Cidade</th>
                    <th>Sexo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td class="text-center"><button class="btn btn-primary">Editar</button></td>
                    <td class="text-center"><button class="btn btn-danger">Excluir</button></td>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->cpf }}</td>
                    <td>{{ $cliente->data_nascimento }}</td>
                    <td>{{ $cliente->estado }}</td>
                    <td>{{ $cliente->cidade }}</td>
                    <td>{{ $cliente->sexo }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
