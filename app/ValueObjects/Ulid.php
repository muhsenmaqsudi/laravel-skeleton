<?php

namespace App\ValueObjects;

use App\ValueObjects\Concerns\HasStringValue;
use App\ValueObjects\Concerns\HasToStringMagic;

class Ulid
{
    use HasStringValue;
    use HasToStringMagic;

    public function equals(mixed $other): bool
    {
        if (!$other instanceof self) {
            return false;
        }

        return $this->value == $other;
    }
}
