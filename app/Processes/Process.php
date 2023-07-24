<?php

namespace App\Processes;

use App\Http\Payloads\V1\Payload;
use Illuminate\Support\Facades\Pipeline;

abstract class Process
{
    protected array $tasks = [];

    public function run(Payload $payload)
    {
        return Pipeline::send(
            passable: $payload,
        )->through(
            pipes: $this->tasks,
        )->thenReturn();
    }
}
