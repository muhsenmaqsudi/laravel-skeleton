<?php

namespace App\Tasks;

use App\Http\Payloads\V1\Payload;
use Closure;

class DoWalletTransfer implements Task
{

    public function __invoke(Payload $payload, Closure $next)
    {
        return $next($payload);
    }
}
