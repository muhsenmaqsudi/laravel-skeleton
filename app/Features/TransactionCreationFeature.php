<?php

namespace App\Features;

use App\Action\CreateNewTransaction;
use App\Action\DoWalletTransfer;
use App\Http\Payloads\V1\Payload;

class TransactionCreationFeature extends Feature
{
    function handle(Payload $payload)
    {
        $createdTransaction = CreateNewTransaction::make()->handle($payload);
        $transferredWallet = DoWalletTransfer::make()->handle($payload);
    }
}
