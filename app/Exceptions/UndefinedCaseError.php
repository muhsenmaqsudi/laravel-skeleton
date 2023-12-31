<?php

namespace App\Exceptions;

use Error;

final class UndefinedCaseError extends Error
{
    /**
     * @param  class-string  $enum
     * @param  string  $case
     * @return void
     */
    public function __construct(string $enum, string $case)
    {
        parent::__construct(
            message: "Undefined constant $enum::$case.",
        );
    }
}
