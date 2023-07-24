<?php

namespace App\ValueObjects;

use App\ValueObjects\Concerns\HasFloatValue;
use App\ValueObjects\Concerns\HasToStringMagic;

class Amount
{
    use HasFloatValue;
    use HasToStringMagic;
}
