<?php

namespace App\Http\Repositories;

use App\Models\Produto;

class ProdutoRepository
{
    private $produto;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function index()
    {
        return response($this->produto->all(), 200);
    }

    public function store($request)
    {
        $validate = $request->validate([
            'nome' => 'required|min:3|max:60|string',
            'valor' => 'required|integer',
            'loja_id' => 'required|integer|exists:lojas,id',
            'ativo' => 'required|bool'
        ]);

        $this->produto->fill($validate);
        $this->produto->save();

        $body = 'Produto: ' . $this->produto . ' adicionado com sucesso!';

        return response($this->produto, 201);
    }

    public function show($id)
    {
        return response($this->produto->where('produtos.id', $id)->get(), 200);
    }

    public function update($request, $id)
    {
        $validate = $request->validate([
            'nome' => 'required',
            'valor' => 'required|integer',
            'ativo' => 'required|bool'
        ]);

        $produto = $this->produto->find($id);
        $produto->fill($validate);
        $produto->save();

        return response($produto, 200);
    }

    public function destroy($id)
    {
        return response($this->produto->destroy($id), 200);
    }
}
