<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Loja;
use Illuminate\Http\Request;

class LojaController extends BaseController
{
    public function index()
    {
        try {
            return response()->json(Loja::with('produtos')->get());
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validate = $request->validate([
                'nome_empresa' => 'required|min:3|max:40|string',
                'razao_social' => 'required|min:3|max:40|string',
            ]);

            $loja = Loja::create($validate);
            $data['loja'] = $loja;

            return $this->sendResponse($data, 'Loja criada com sucesso.');
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    public function show($id)
    {
        try {
            $loja = Loja::where('lojas.id', $id)->with('produtos')->get();

            if ($loja->isEmpty()) {
                $data['message'] = 'Produto não encontrado';
                return $this->sendError($data, 'Loja não encontrado.');
            }

            return response()->json();
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validate = $request->validate([
                'nome_empresa' => 'min:3|max:40|string',
                'razao_social' => 'min:3|max:40|string',
            ]);

            $loja = Loja::find($id);


            if (is_null($loja)) {
                $data['code'] = 404;
                $data['message'] = 'loja_id: '.$id.' não encontrada.';
                return $this->sendError($data, 'Loja não encontrada.');
            }


            $loja->nome_empresa = isset($validate['nome_empresa']) ? $validate['nome_empresa'] : $loja->nome_empresa;
            $loja->razao_social = isset($validate['razao_social']) ? $validate['razao_social'] : $loja->razao_social;
            $loja->save();

            $data['loja'] = $loja;

            return $this->sendResponse($data, 'Loja alterada com sucesso.');
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    public function destroy($id)
    {
        try {
            Loja::destroy($id);
            $data['loja_id'] = $id;

            return $this->sendResponse($data, 'Loja excluida com sucesso.');
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }
}
