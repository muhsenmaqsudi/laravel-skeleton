<?php

namespace App\ValueObjects\Concerns;

trait HasBooleanValue
{
    public function __construct(
        private readonly bool $value,
    ) {}

    public function value(): bool
    {
        return $this->value;
    }
}
