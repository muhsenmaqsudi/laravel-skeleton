<?php

namespace App\Http\Responses\V1;

use App\Http\Concerns\HasResponse;
use App\Http\Enums\Status;
use Illuminate\Contracts\Support\Responsable;

class MessageResponse implements Responsable
{
    use HasResponse;

    /**
     * @param array{message:string} $data
     * @param Status $status
     */
    public function __construct(
        private readonly array $data,
        private readonly Status $status = Status::OK,
    ) {
    }
}
