<?php
namespace App\Http\Controllers;

use App\Services\ClienteService;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller; // Certifique-se de importar o Controller correto

class ClienteController extends Controller
{
    private $clienteService;

    public function __construct(ClienteService $clienteService)
    {
        $this->clienteService = $clienteService;
    }

    // Métodos para a API
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    // Lógica para criar um cliente na API
    public function store(Request $request)
    {
        // Lógica para validação e criação de cliente na API
    }

    // Lógica para buscar um cliente específico na API
    public function show(Cliente $cliente)
    {
        return response()->json($cliente);
    }

    // Lógica para atualizar um cliente na API
    public function update(Request $request, Cliente $cliente)
    {
        // Lógica para validação e atualização de cliente na API
    }

    // Lógica para excluir um cliente na API
    public function destroy(Cliente $cliente)
    {
        // Lógica para exclusão de cliente na API
    }

    // Métodos para as views
    // Lógica para exibir o formulário de criação de cliente na interface da web
    public function createView()
    {
        return view('clientes.create');
    }

    // Lógica para exibir o formulário de edição de cliente na interface da web
    public function editView(Cliente $cliente)
    {
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    // Lógica para listar todos os clientes nas views da interface da web
    public function indexView(Request $request)
    {
        $clientes = Cliente::paginate(3);

        return view('clientes.index', compact('clientes'));
    }

    // Lógica para validação e criação de cliente na interface da web
    public function storeView(Request $request)
    {
        $cliente = $this->clienteService->storeCliente($request->all());

        if ($cliente) {
            return redirect()->action([ClienteController::class, 'indexView'])->with('success', 'Cliente criado com sucesso!');
        } else {
            return back()->withInput()->with('error', 'Não foi possível criar o cliente.');
        }
    }

    public function showView(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    public function updateView(Request $request, Cliente $cliente)
    {
        $updated = $cliente->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->action([ClienteController::class, 'indexView'])->with('message', 'Alteração feita com sucesso!');
        }

        return redirect()->action([ClienteController::class, 'indexView'])->with('message', 'Erro ao realizar alteração.');
    }

    public function destroyView(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->action([ClienteController::class, 'indexView'])->with('message', 'Cliente excluído com sucesso.');
    }
}





// namespace App\Http\Controllers;

// use App\Services\ClienteService;
// use App\Models\Cliente;
// use Illuminate\Http\Request;
// use Illuminate\Validation\Rule;

// class ClienteController extends Controller
// {
//     private $clienteService;

//     public function __construct(ClienteService $clienteService)
//     {
//         $this->clienteService = $clienteService;
//     }

//     // Métodos para a API
//     public function index()
//     {
//         // Lógica para listar todos os clientes da API
//     }

//     public function store(Request $request)
//     {
//         // Lógica para criar um cliente na API
//     }

//     public function show(Cliente $cliente)
//     {
//         // Lógica para buscar um cliente específico na API
//     }

//     public function update(Request $request, Cliente $cliente)
//     {
//         // Lógica para atualizar um cliente na API
//     }

//     public function destroy(Cliente $cliente)
//     {
//         // Lógica para excluir um cliente na API
//     }

//     // Métodos para as views
//     public function create()
//     {
//         // Lógica para exibir o formulário de criação de cliente
//     }

//     public function edit(Cliente $cliente)
//     {
//         // Lógica para exibir o formulário de edição de cliente
//     }

//     public function indexView(Request $request)
//     {
//         $clientes = Cliente::paginate(3); // Você pode ajustar o número de itens por página conforme necessário.

//         return view('clientes.index', compact('clientes'));
//     }

//     public function storeView(Request $request)
//     {
//         $cliente = $this->clienteService->storeCliente($request->all());

//         if ($cliente) {
//             return redirect()->action([ClienteViewController::class, 'index'])->with('success', 'Cliente criado com sucesso!');
//         } else {
//             return back()->withInput()->with('error', 'Não foi possível criar o cliente.');
//         }
//     }

//     public function showView(Cliente $cliente)
//     {
//         // Lógica para mostrar um cliente específico nas views
//     }

//     public function updateView(Request $request, Cliente $cliente)
//     {
//         // Lógica para atualizar um cliente nas views
//     }

//     public function destroyView(Cliente $cliente)
//     {
//         // Lógica para excluir um cliente nas views
//     }
// }
