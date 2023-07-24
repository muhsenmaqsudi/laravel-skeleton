<?php

namespace App\Http\Responses\V1;

use App\Http\Concerns\HasResponse;
use App\Http\Enums\Status;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CollectionResponse implements Responsable
{
    use HasResponse;

    public function __construct(
        private readonly AnonymousResourceCollection|Collection $data,
        private readonly Status $status = Status::OK,
    ) {
    }
}
