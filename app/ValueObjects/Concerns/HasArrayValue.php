<?php

namespace App\ValueObjects\Concerns;

trait HasArrayValue
{
    public function __construct(
        private readonly array $value,
    ) {}

    public function value(): array
    {
        return $this->value;
    }
}
