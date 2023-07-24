<?php

namespace App\ValueObjects;

use App\ValueObjects\Concerns\HasStringValue;
use App\ValueObjects\Concerns\HasToStringMagic;

class StringValue
{
    use HasStringValue;
    use HasToStringMagic;
}
