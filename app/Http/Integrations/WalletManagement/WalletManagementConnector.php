<?php

namespace App\Http\Integrations\WalletManagement;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;

class WalletManagementConnector extends Connector
{
    use AcceptsJson;

    public function api(): WalletManagementResource
    {
        return new WalletManagementResource($this);
    }

    /**
     * The Base URL of the API
     *
     * @return string
     */
    public function resolveBaseUrl(): string
    {
        return 'http://wallet-mgt.idpay.local';
    }

    /**
     * Default headers for every request
     *
     * @return string[]
     */
    protected function defaultHeaders(): array
    {
        return [];
    }

    /**
     * Default HTTP client options
     *
     * @return string[]
     */
    protected function defaultConfig(): array
    {
        return [];
    }
}
