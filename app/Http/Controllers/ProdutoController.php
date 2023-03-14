<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ProdutoRepository;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private $produtoRepository;

    public function __construct(ProdutoRepository $produtoRepository)
    {
        $this->produtoRepository = $produtoRepository;
    }

    public function index()
    {
        try {
            return $this->produtoRepository->index();
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    public function store(Request $request)
    {
        try {
            return $this->produtoRepository->store($request);
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }

 public function show($id)
    {
        try {
            return $this->produtoRepository->show($id);
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            return $this->produtoRepository->update($request, $id);
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    public function destroy($id)
    {
        try {
            return $this->produtoRepository->destroy($id);
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }
}
