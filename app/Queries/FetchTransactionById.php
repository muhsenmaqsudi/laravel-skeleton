<?php

namespace App\Queries;

use App\Models\Transaction;
use App\ValueObjects\Ulid;
use Illuminate\Database\Eloquent\Model;

class FetchTransactionById
{
    public function handle(Ulid $transactionId): Model|Transaction
    {
        return Transaction::query()->findOrFail($transactionId);
    }
}
