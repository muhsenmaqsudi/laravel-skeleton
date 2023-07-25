<?php

namespace App\Http\Integrations\WalletManagement\Requests;

use App\ValueObjects\WalletID;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class FetchWalletRequest extends Request
{
    public function __construct(
        protected WalletID $walletId
    ) {
    }

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
        return '/admin/wallets/' . $this->walletId;
    }
}
