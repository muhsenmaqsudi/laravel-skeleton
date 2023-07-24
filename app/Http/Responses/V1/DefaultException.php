<?php

namespace App\Http\Responses\V1;

use Illuminate\Contracts\Support\Responsable;

class DefaultException implements Responsable
{
    public function __construct(readonly private object $data)
    {
    }

    public function toResponse($request): \Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response
    {
        return response()->json([
            'error' => 'error message',
            'status' => false,
            'code' => 123,
        ]);
    }
}
