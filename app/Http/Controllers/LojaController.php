<?php

namespace App\Http\Controllers;

use App\Http\Repositories\LojaRepository;
use Illuminate\Http\Request;

class LojaController extends Controller
{
    private $lojaRepository;

    public function __construct(LojaRepository $lojaRepository)
    {
        $this->lojaRepository = $lojaRepository;
    }

    public function index()
    {
        try {
            return $this->lojaRepository->index();
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    public function store(Request $request)
    {
        try {
            return $this->lojaRepository->store($request);
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    public function show($id)
    {
        try {
            return $this->lojaRepository->show($id);
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            return $this->lojaRepository->update($request, $id);
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }

    public function destroy($id)
    {
        try {
            return $this->lojaRepository->destroy($id);
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 500);
        }
    }
}
