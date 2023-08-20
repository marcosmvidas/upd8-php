<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Cliente::truncate();

        Cliente::create([
            'cpf' => '12345678911',
            'nome' => 'Fulano de Oliveira Quatro',
            'data_nascimento' => '1990-01-15',
            'sexo' => 'Masculino',
            'endereco' => 'Rua A, 123',
            'estado' => 'SP',
            'cidade' => 'São Paulo',
        ]);

        Cliente::create([
            'cpf' => '98765432110',
            'nome' => 'Ciclana da Silva',
            'data_nascimento' => '1985-05-20',
            'sexo' => 'Feminino',
            'endereco' => 'Av. B, 456',
            'estado' => 'RJ',
            'cidade' => 'Rio de Janeiro',
        ]);
        Cliente::create([
            'cpf' => '12345678900',
            'nome' => 'Create Cliente de Tal',
            'data_nascimento' => '1990-01-15',
            'sexo' => 'Masculino',
            'endereco' => 'Rua A, 123',
            'estado' => 'SP',
            'cidade' => 'São Paulo',
        ]);

        Cliente::create([
            'cpf' => '98765432100',
            'nome' => 'Donanna de Oliveira Silva',
            'data_nascimento' => '1985-05-20',
            'sexo' => 'Feminino',
            'endereco' => 'Av. B, 456',
            'estado' => 'RJ',
            'cidade' => 'Rio de Janeiro',
        ]);

        Cliente::create([
            'cpf' => '55566677788',
            'nome' => 'Siclano Souza',
            'data_nascimento' => '1995-07-12',
            'sexo' => 'Masculino',
            'endereco' => 'Av. D, 1010',
            'estado' => 'PR',
            'cidade' => 'Curitiba',
        ]);
    }
}
