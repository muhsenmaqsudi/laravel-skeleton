<?php

namespace App\Http\Integrations\WalletManagement\Requests;

use App\ValueObjects\WalletID;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListWalletsRequest extends Request
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
        return '/admin/wallets';
    }
}
