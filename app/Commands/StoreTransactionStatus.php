<?php

namespace App\Commands;

use App\Enums\TransactionStatus;
use App\Models\Transaction;
use App\ValueObjects\StringValue;

class StoreTransactionStatus
{
    public function handle(Transaction $transaction, TransactionStatus $status, string $description): void
    {
        $transaction->status()->create([
            'status' => $status->value,
            'description' => $description,
        ]);
    }
}
