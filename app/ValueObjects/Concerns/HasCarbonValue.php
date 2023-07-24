<?php

namespace App\ValueObjects\Concerns;

use Carbon\CarbonInterface;

trait HasCarbonValue
{
    public function __construct(
        private readonly CarbonInterface $value,
    ) {}

    public function value(): CarbonInterface
    {
        return $this->value;
    }
}
