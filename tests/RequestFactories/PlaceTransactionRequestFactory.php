<?php

namespace Tests\RequestFactories;

use Illuminate\Support\Str;
use Worksome\RequestFactories\RequestFactory;

class PlaceTransactionRequestFactory extends RequestFactory
{
    public function definition(): array
    {
        return [
            'user_id' => (string)Str::ulid(),
            'wallet_id' => 688620680101,
            'amount' => $this->faker->randomNumber(6, true),
        ];
    }
}
