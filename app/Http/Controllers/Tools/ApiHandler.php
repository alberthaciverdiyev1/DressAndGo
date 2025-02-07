<?php

namespace App\Http\Api\Tools;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiHandler extends ApiBase
{
    protected mixed $api = null;

    public function __construct(Request $request)
    {
        $apiVersion = $request->route('version');

        $this->api = match ($apiVersion) {
            'v1' => '' ,
            default => $this->invalidApiVersionResponse(),
        };
    }

    public function login(Request $request): JsonResponse
    {
        return $this->api->login($request);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function logout(Request $request): JsonResponse
    {
        return $this->api->logout($request);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function register(Request $request): JsonResponse
    {
        return $this->api->register($request);
    }

}
