<?php

namespace App\Http\Responses\V1;

use App\Http\Concerns\HasResponse;
use App\Http\Enums\Status;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;

class ModelResponse implements Responsable
{
    use HasResponse;

    public function __construct(
        private readonly JsonResource|Model $data,
        private readonly Status $status = Status::OK,
    ) {
    }
}
