<?php

namespace Kernel\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\JsonResponse;

class BaseController extends Controller
{

    /**
     * @param $callback
     * @return JsonResponse
     */
    public function execWithJsonResponse($callback): JsonResponse
    {
        try{
            $response= array_merge([
                'success'=> true,
                'code'=> 200,
                'message'=> ''
            ], $callback());
        } catch (Exception $exception){
            report($exception);
            $code = $exception->getCode();
            $httpCode = ($code >= 100 && $code <= 599) ? (int)$code : 500;
            $response = [
                'success' => false,
                'code' => $httpCode,
                'message' => $exception->getMessage()
            ];
        }
        return response()->json($response);
    }
}
