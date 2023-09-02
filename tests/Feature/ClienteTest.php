<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Cliente;
use App\Enums\GeneroEnum;

class ClienteTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        Cliente::factory()->create([
            'cpf' => '12345678901',
            'nome' => 'João da Silva',
            'data_nascimento' => '1990-01-01',
            'sexo' => GeneroEnum::MASCULINO(),
            'endereco' => 'Rua A, 123',
            'estado' => 'SP',
            'cidade' => 'São Paulo',
        ]);
    }

    public function it_can_create_a_cliente()
    {
        $data = [
            'cpf' => '12345678901',
            'nome' => 'João da Silva',
            'data_nascimento' => '1990-01-01',
            'sexo' => GeneroEnum::MASCULINO(),
            'endereco' => 'Rua A, 123',
            'estado' => 'SP',
            'cidade' => 'São Paulo',
        ];

        $response = $this->post(route('clientes.store'), $data);

        $this->assertDatabaseHas('clientes', $data);
        $response->assertRedirect(route('clientes.index'));
    }
}
