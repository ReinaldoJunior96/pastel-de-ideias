<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use App\Notifications\NotificaCliente;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    private Cliente $cliente;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index(): JsonResponse
    {
        return response()->json($this->cliente->all(), 200);
    }

    public function show($id): JsonResponse
    {
        $usuarioEncontrado = $this->cliente->find($id);
        return
            empty($usuarioEncontrado) ?
                response()->json('Usuário não encontrado', 500) :
                response()->json($usuarioEncontrado, 200);
    }

    public function store(ClienteRequest $request): JsonResponse
    {
        $this->cliente->nome = $request->nome;
        $this->cliente->email = $request->email;
        $this->cliente->telefone = $request->telefone;
        $this->cliente->dataNascimento = $request->dataNascimento;
        $this->cliente->endereco = $request->endereco;
        $this->cliente->complemento = $request->complemento;
        $this->cliente->cep = $request->cep;


        return $this->cliente->save() ? response()->json('Success', 200) : response()->json('Error', 500);

    }

    public function update(Request $request, $id): JsonResponse
    {
        $usuarioEncontrado = $this->cliente->find($id);
        $usuarioEncontrado->nome = $request->nome;
        $usuarioEncontrado->email = $request->email;
        $usuarioEncontrado->telefone = $request->telefone;
        $usuarioEncontrado->dataNascimento = $request->dataNascimento;
        $usuarioEncontrado->endereco = $request->endereco;
        $usuarioEncontrado->complemento = $request->complemento;
        $usuarioEncontrado->cep = $request->cep;

        return $usuarioEncontrado->save() ? response()->json('Success', 200) : response()->json('Error', 500);

    }

    public function delete($id): JsonResponse
    {
        $usuarioEncontrado = $this->cliente->find($id);
        if ($usuarioEncontrado == null) {
            return response()->json('Usuário não encontrado', 200);
        }
        return $usuarioEncontrado->delete() ?
            response()->json('Success', 200) : response()->json('Error', 500);
    }

}
