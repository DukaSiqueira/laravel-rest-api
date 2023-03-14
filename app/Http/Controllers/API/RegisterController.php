<?php

namespace App\Http\Controllers\API;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends BaseController
{
    // Controller utilizado para login e registro de usuários
    public function register(Request $request)
    {
        try {
            $validate = User::validateUser($request);

            if ($validate->fails()) {
                return $this->sendError('Erro de validação', $validate->errors());
            }

            $user = $request->all();
            $user['password'] = bcrypt($user['password']);
            $user = User::create($user);

            $data['name'] = $user->name;
            $data['email'] = $user->email;
            return $this->sendResponse($data, 'Usuário registrado.');
        } catch (\Exception $exception) {
            return $this->exceptionResponse($exception);
        }
    }

    public function login(Request $request)
    {
        try {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                $data['name'] = $user->name;
                $data['token'] = $user->createToken('app', ['access'])->accessToken;

                return $this->sendResponse($data, 'Login realizado com sucesso.');
            } else {
                return $this->sendResponse('Não autorizado', ['error' => 'Não autorizado']);
            }
        } catch (Exception $exception) {
            return $this->exceptionResponse($exception);
        }
    }
}
