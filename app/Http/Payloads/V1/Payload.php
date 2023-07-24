<?php

namespace App\Http\Payloads\V1;

interface Payload
{
    public function toArray(): array;
}
