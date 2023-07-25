<?php

namespace App\Http\Integrations\WalletOperation\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class WalletTransferRequest extends Request
{
    /**
     * Define the HTTP method
     *
     * @var Method
     */
    protected Method $method = Method::GET;

    /**
     * Define the endpoint for the request
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return '/example';
    }
}
