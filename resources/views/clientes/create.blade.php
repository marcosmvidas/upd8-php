@extends('componente.layout')

@section('content')
    <div class="container">
        <div class="card mt-3 p-5">
            <h1 class="mt-4 text-primary">Cadastro Cliente</h1>
            <div class="card-body">
                <form>
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="cpf" class="form-label">CPF:</label>
                            <input type="text" id="cpf" name="cpf" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" id="nome" name="nome" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
                            <input type="text" id="data_nascimento" name="data_nascimento" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Sexo:</label>
                            <div class="d-flex">
                                <div class="form-check me-3">
                                    <input type="radio" id="masculino" name="sexo" value="Masculino" class="form-check-input">
                                    <label for="masculino" class="form-check-label">Masculino</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" id="feminino" name="sexo" value="Feminino" class="form-check-input">
                                    <label for="feminino" class="form-check-label">Feminino</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="endereco" class="form-label">Endereço:</label>
                            <input type="text" id="endereco" name="endereco" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="estado" class="form-label">Estado:</label>
                            <select id="estado" name="estado" class="form-select"></select>
                        </div>
                        <div class="col-md-4">
                            <label for="cidade" class="form-label">Cidade:</label>
                            <select id="cidade" name="cidade" class="form-select"></select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-end">
                            <button type="submit" class="btn btn-primary me-2">Cadastrar</button>
                            <button type="reset" class="btn btn-secondary">Limpar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection