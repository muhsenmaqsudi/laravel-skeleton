<?php

namespace App\ValueObjects;

use App\ValueObjects\Concerns\HasStringValue;

class Email
{
    use HasStringValue;

    public function validate(): bool
    {
        return (bool) filter_var(
            value: $this->value,
            filter: FILTER_VALIDATE_EMAIL,
        );
    }
}
