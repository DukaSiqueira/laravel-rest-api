<?php

namespace App\Http\Middleware;

use App\Http\Controllers\API\BaseController;
use Closure;
use Illuminate\Http\Request;

class CheckToken extends BaseController
{
    public function handle(Request $request, Closure $next, ...$scopes)
    {
        $token = $request->user()->token();

        if (is_null($token->scopes)) {
            $response['code'] = 403;
            $response['message'] = 'Não autorizado';
            return $this->middlewareResponse($response);
        }

        if ($token && in_array(null, $token->scopes)) {
            $response['code'] = 403;
            $response['message'] = 'Não autorizado';
            return $this->middlewareResponse($response);
        }

        foreach ($scopes as $scope) {
            if (!$token->can($scope)) {
                $response['code'] = 403;
                $response['message'] = 'Não autorizado';
                return $this->middlewareResponse($response);
            }
        }

        return $next($request);
    }
}
