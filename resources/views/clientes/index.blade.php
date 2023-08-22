@extends('componente.layout')

@section('content')
<div class="container">
    <div class="bg-light p-4 rounded shadow-sm mt-5">
        <div class="text-end mt-3">
            <a href="{{ route('clientes.create') }}" class="btn btn-success">Cadastrar</a>
        </div>
        <div class="p-3 rounded shadow-sm">
            <h2 class="mb-4">Consulta de Cliente</h2>
            <form>
                <div class="d-flex gap-3">
                    <div class="flex-1">
                        <label for="cpf">CPF</label>
                        <input type="text" id="cpf" name="cpf" class="form-control">
                    </div>
                    <div class="flex-1">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control">
                    </div>
                    <div class="flex-1">
                        <label for="data_nascimento">Data Nascimento</label>
                        <input type="date" id="data_nascimento" name="data_nascimento" class="form-control datepicker">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Sexo:</label>
                        <div class="d-flex">
                            <div class="form-check me-3">
                                <input type="radio" id="masculino" name="sexo" value="M" class="form-check-input">
                                <label for="masculino" class="form-check-label">Masculino</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="feminino" name="sexo" value="F" class="form-check-input">
                                <label for="feminino" class="form-check-label">Feminino</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-start mt-3">
                    <div class="flex-1">
                        <label for="estado">Estado</label>
                        <input type="text" id="estado" name="estado" class="form-control">
                    </div>
                    <div class="flex-1">
                        <label for="Cidade">Cidade</label>
                        <input type="text" id="cidade" name="cidade" class="form-control">
                    </div>
                    <div class="flex-1 text-end">
                        <button class="btn btn-primary">Pesquisar</button>
                        <button class="btn btn-secondary">Limpar</button>
                    </div>
                </div>
            </form>
        </div>
        <h2 class="mt-4">Resultado da Pesquisa</h2>
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
                    <td class="text-center">
                        <a href="{{ route('clientes.edit', ['cliente' => $cliente]) }}" class="btn btn-primary">Editar</a>
                    </td>
                    <td class="text-center"><button class="btn btn-danger">Excluir</button></td>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->cpf }}</td>
                    <td>{{ date('d/m/Y', strtotime($cliente->data_nascimento)) }}</td>
                    <td>{{ $cliente->estado }}</td>
                    <td>{{ $cliente->cidade }}</td>
                    <td>{{ $cliente->sexo }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- No final da sua view, antes da tag </body> -->
<script>
    flatpickr(".datepicker", {
        dateFormat: "d/m/Y", // Formato de data desejado (dd/mm/yyyy)
        locale: "pt" // Localização para usar as configurações do idioma português
    });
</script>

@endsection
