<?php

namespace App\Tasks;

use App\Http\Payloads\V1\Payload;
use Closure;

interface Task
{
    public function __invoke(Payload $payload, Closure $next);
}
