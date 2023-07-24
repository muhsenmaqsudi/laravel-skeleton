<?php

namespace App\ValueObjects;

use App\ValueObjects\Concerns\HasStringValue;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password as PasswordValidation;

class Password
{
    use HasStringValue;

    public function validate(): bool
    {
        return Validator::make(
            data: [
                'password' => $this->value,
            ],
            rules: [
                'password' => [
                    'required',
                    PasswordValidation::default(),
                ]
            ]
        )->passes();
    }

    public function check(string $check): bool
    {
        return Hash::check(
            value: $this->value,
            hashedValue: $check,
        );
    }
}
