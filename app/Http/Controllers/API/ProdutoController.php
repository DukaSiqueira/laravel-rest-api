<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends BaseController
{

    public function index()
    {
        try {
            $produtos = Produto::all();
            if ($produtos->isEmpty()) {
                $data['message'] = 'Não há produtos cadastrados.';
                return $this->sendError($data, 'Sem produtos.', 404);
            }
            return response()->json($produtos);
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validate = $request->validate([
                'nome' => 'required|min:3|max:60|string',
                'valor' => 'required|integer',
                'loja_id' => 'required|integer|exists:lojas,id',
                'ativo' => 'required|bool'
            ]);

            $produto = Produto::create($validate);

            $data['produto'] = $produto;

            return $this->sendResponse($data, 'Produto adicionado com sucesso.');
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }

 public function show($id)
    {
        try {
            $produto = Produto::where('produtos.id', $id)->get();
            if ($produto->isEmpty()) {
                $data['message'] = 'Produto não encontrado';
                return $this->sendError($data, 'Produto não encontrado.', 404);
            }
            return response()->json($produto);
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validate = $request->validate([
                'nome' => 'min:3|max:40|string',
                'valor' => 'numeric',
                'ativo' => 'bool'
            ]);

            $produto = Produto::find($id);

            if ((is_null($produto))) {
                $data['code'] = 404;
                $data['message'] = 'produto_id: '.$id.' não encontrado.';
                return $this->sendError($data, 'Produto não encontrado.', 404);
            }

            $produto->nome = $validate['nome'] ?? $produto->nome;
            $produto->valor = $validate['valor'] ?? $produto->valor;
            $produto->ativo = $validate['ativo'] ?? $produto->ativo;
            $produto->save();
            $data['produto'] = $produto;

            return $this->sendResponse($data, 'Produto alterado com sucesso.');
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    public function destroy($id)
    {
        try {
            Produto::destroy($id);
            $data['produto_id'] = $id;
            return $this->sendResponse($data, 'Produto excluido com sucesso.');
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }
}
