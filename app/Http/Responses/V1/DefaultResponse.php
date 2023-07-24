<?php

namespace App\Http\Responses\V1;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class DefaultResponse implements Responsable
{
    public function __construct(readonly private object $data)
    {
    }

    public function toResponse($request): JsonResponse
    {
        return new JsonResponse($this->data);
    }
}
