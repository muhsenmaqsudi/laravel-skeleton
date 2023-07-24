<?php

namespace App\ValueObjects\Concerns;

trait HasFloatValue
{
    public function __construct(
        private readonly float $value,
    ) {}

    public function value(): float
    {
        return $this->value;
    }
}
