<?php

namespace App\ValueObjects\Concerns;

trait HasStringValue
{
    public function __construct(
        private readonly string $value,
    ) {}

    public function value(): string
    {
        return $this->value;
    }
}
