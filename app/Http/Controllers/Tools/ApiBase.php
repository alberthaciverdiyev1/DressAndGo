<?php

namespace App\Http\Api\Tools;

use Illuminate\Http\Exceptions\HttpResponseException;

abstract class ApiBase
{
    protected final function invalidApiVersionResponse()
    {
        $response = response()->json([
            'error' => 'Invalid api version',
        ], 400);

        throw new HttpResponseException($response);
    }
}
