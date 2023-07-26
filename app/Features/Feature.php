<?php

namespace App\Features;

use App\Http\Payloads\V1\Payload;

abstract class Feature
{
    abstract function handle(Payload $payload);
}
