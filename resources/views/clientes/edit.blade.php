@extends('componente.layout')

@section('content')
    <div class="container">
        <div>
            @if (session()->has('message'))
            @endif
        </div>
        <h1 class="mt-4">Cadastro Cliente - Alteração</h1>
        <form action="{{ route('clientes.update', ['cliente' => $cliente->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT" >
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" id="cpf" name="cpf" class="form-control" value="{{ $cliente->cpf }}">
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" value="{{ $cliente->nome }}">
            </div>
            <div class="mb-3">
                <label for="data_nascimento" class="form-label">Data Nascimento</label>
                <input type="text" id="data_nascimento" name="data_nascimento" class="form-control" value="{{ $cliente->data_nascimento }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Sexo</label>
                <div class="form-check">
                    <input type="radio" id="masculino" name="sexo" value="Masculino" class="form-check-input" {{ $cliente->sexo === 'Masculino' ? 'checked' : '' }}>
                    <label for="masculino" class="form-check-label">Masculino</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="feminino" name="sexo" value="Feminino" class="form-check-input" {{ $cliente->sexo === 'Feminino' ? 'checked' : '' }}>
                    <label for="feminino" class="form-check-label">Feminino</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" id="estado" name="estado" value="{{ $cliente->estado }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" id="cidade" name="cidade" value="{{ $cliente->cidade }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>

        </form>
    </div>
@endsection
