<?php

namespace App\ValueObjects;

use App\ValueObjects\Concerns\HasStringValue;
use App\ValueObjects\Concerns\HasToStringMagic;
use RuntimeException;

class WalletID
{
    use HasStringValue;
    use HasToStringMagic;

    public function checkDigit(): bool
    {
        if ($this->value <= 13) {
            return false;
        }
        return true;
    }

    public function getSequenceNo()
    {
        return str()->padRight(2);
    }
}
