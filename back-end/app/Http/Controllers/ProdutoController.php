<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Produto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{
    private Produto $produto;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function index()
    {
        return $this->produto->all();
    }

    public function show($id): JsonResponse
    {
        $pedidoEncontrado = $this->produto->find($id);
        return
            empty($pedidoEncontrado) ?
                response()->json('Pedido não encontrado', 500) :
                response()->json($pedidoEncontrado, 200);
    }

    public function store(ProdutoRequest $request): JsonResponse
    {
        $this->produto->nome = $request->nome;
        $this->produto->preco = $request->preco;

        if ($request->hasFile('pathImg') && $request->file('pathImg')->isValid()) {
            if (Storage::exists($request->pathImg)) {
                Storage::delete($request->pathImg);
            }
            $upload = Storage::put('public/fotos-produtos/', $request->pathImg);

            if (!$upload) {
                return response()->json('Error', 500);
            }
            $this->produto->pathImg = str_replace('public', '/storage', $upload);
        }

        return $this->produto->save() ?
            response()->json('Success', 200) : response()->json('Error', 500);

    }

    public function update(ProdutoRequest $request, $id): JsonResponse
    {
        $produtoEncontrado = $this->produto->find($id);
        $produtoEncontrado->nome = $request->nome;
        $produtoEncontrado->preco = $request->preco;

        if ($request->hasFile('pathImg') && $request->file('pathImg')->isValid()) {
            if (Storage::exists($request->pathImg)) {
                Storage::delete($request->pathImg);
            }
            $upload = Storage::put('public/fotos-produtos/', $request->pathImg);

            if (!$upload) {
                return response()->json('Error', 500);
            }
            $produtoEncontrado->pathImg = str_replace('public', '/storage', $upload);
        }
        return $produtoEncontrado->save() ? response()->json('Success', 200) : response()->json('Error', 500);
    }

    public function delete($id): JsonResponse
    {
        $produtoEncontrado = $this->produto->find($id);
        if ($produtoEncontrado == null) {
            return response()->json('Produto não encontrado', 200);
        }
        return $produtoEncontrado->delete() ?
            response()->json('Success', 200) : response()->json('Error', 500);
    }

    public function onlyTrashed()
    {
        $produtosDeletado = $this->produto->onlyTrashed()->get();
        return response()->json($produtosDeletado, 200);
    }

    public function restoreTranshed($id)
    {
        $this->produto->withTrashed()->whereId($id)->restore();
        return response()->json('Success', 200);
    }
}
