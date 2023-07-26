<?php

namespace App\Action;

use App\Http\Integrations\WalletManagement\WalletManagementConnector;
use App\Http\Payloads\V1\Payload;
use Lorisleiva\Actions\Concerns\AsAction;
use Saloon\Exceptions\InvalidResponseClassException;
use Saloon\Exceptions\PendingRequestException;

class DoWalletTransfer
{
    use AsAction;

    public function handle(Payload $payload)
    {
        $walletMgtConnector = new WalletManagementConnector();
        $myWalletResp = $walletMgtConnector->api()->fetch($payload->walletId);
        $allWalletsResp = $walletMgtConnector->api()->all();

        return $myWalletResp->json();
    }
}
