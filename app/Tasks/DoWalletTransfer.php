<?php

namespace App\Tasks;

use App\Http\Integrations\WalletManagement\Requests\FetchWalletRequest;
use App\Http\Integrations\WalletManagement\WalletManagementConnector;
use App\Http\Payloads\V1\Payload;
use Closure;
use Saloon\Exceptions\InvalidResponseClassException;
use Saloon\Exceptions\PendingRequestException;

class DoWalletTransfer implements Task
{

    /**
     * @throws \ReflectionException
     * @throws InvalidResponseClassException
     * @throws PendingRequestException
     */
    public function __invoke(Payload $payload, Closure $next)
    {
        $walletMgtConnector = new WalletManagementConnector();
        $myWalletResp = $walletMgtConnector->api()->fetch($payload->walletId);
        $allWalletsResp = $walletMgtConnector->api()->all();

        return $next($payload);
    }
}
