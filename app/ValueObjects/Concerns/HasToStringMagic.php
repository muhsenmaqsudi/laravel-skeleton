<?php

namespace App\ValueObjects\Concerns;

trait HasToStringMagic
{
    public function __toString(): string
    {
        return $this->value;
    }
}
