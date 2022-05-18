<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    private $cliente;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index(): JsonResponse
    {
        return response()->json($this->cliente->all(), 200);
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
        $this->cliente->save();

        return $this->cliente->save() ? response()->json('Success', 200) : response()->json('Error', 500);

    }
}
