<?php

namespace App\Processes;

use App\Tasks\CreateNewTransaction;
use App\Tasks\DoWalletTransfer;

class TransactionCreationProcess extends Process
{
    protected array $tasks = [
        CreateNewTransaction::class,
        DoWalletTransfer::class,
    ];
}
