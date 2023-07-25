<?php

test('creates a new transaction', function () {
    $data = \Tests\RequestFactories\PlaceTransactionRequestFactory::new()->create();

    $response = $this->post(
        uri: route('api:v1:transactions:store'),
        data: $data,
    );

    dd($response->json());

    $response->assertStatus(200);
});
