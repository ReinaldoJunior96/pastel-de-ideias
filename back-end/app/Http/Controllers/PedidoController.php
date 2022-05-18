<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    private Pedido $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function index(): JsonResponse
    {
        return response()->json($this->pedido->all(), 200);
    }

    public function show($id): JsonResponse
    {
        $pedidoEncontrado = $this->pedido->find($id);
        return
            empty($pedidoEncontrado) ?
                response()->json('Pedido não encontrado', 500) :
                response()->json($pedidoEncontrado, 200);
    }

    public function store(Request $request): JsonResponse
    {
        $this->pedido->nome = $request->nome;
        $this->pedido->preco = $request->preco;
        $this->pedido->pathImg = $request->pathImg;

        return $this->pedido->save() ? response()->json('Success', 200) : response()->json('Error', 500);

    }

    public function update(Request $request, $id): JsonResponse
    {
        $pedidoEncontrado = $this->pedido->find($id);
        $pedidoEncontrado->nome = $request->nome;
        $pedidoEncontrado->preco = $request->preco;
        $pedidoEncontrado->pathImg = $request->pathImg;

        return $pedidoEncontrado->save() ? response()->json('Success', 200) : response()->json('Error', 500);

    }

    public function delete($id): JsonResponse
    {
        $pedidoEncontrado = $this->pedido->find($id);
        if ($pedidoEncontrado == null) {
            return response()->json('Pedido não encontrado', 200);
        }
        return $pedidoEncontrado->delete() ?
            response()->json('Success', 200) : response()->json('Error', 500);
    }


}
