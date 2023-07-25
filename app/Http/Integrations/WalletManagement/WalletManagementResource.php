<?php

namespace App\Http\Integrations\WalletManagement;

use App\Http\Integrations\Resource;
use App\Http\Integrations\WalletManagement\Requests\FetchWalletRequest;
use App\Http\Integrations\WalletManagement\Requests\ListWalletsRequest;
use App\ValueObjects\WalletID;
use Saloon\Exceptions\InvalidResponseClassException;
use Saloon\Exceptions\PendingRequestException;

class WalletManagementResource extends Resource
{
    /**
     * @throws \ReflectionException
     * @throws InvalidResponseClassException
     * @throws PendingRequestException
     */
    public function all(): \Saloon\Contracts\Response
    {
        return $this->connector->send(new ListWalletsRequest());
    }

    /**
     * @throws \ReflectionException
     * @throws InvalidResponseClassException
     * @throws PendingRequestException
     */
    public function fetch(WalletID $walletID): \Saloon\Contracts\Response
    {
        return $this->connector->send(new FetchWalletRequest($walletID));
    }
}
