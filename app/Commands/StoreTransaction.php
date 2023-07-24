<?php

namespace App\Commands;

use App\Http\Payloads\V1\PlaceTransactionPayload;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;

class StoreTransaction
{
    public function handle(PlaceTransactionPayload $payload): Model|Transaction
    {
        return Transaction::query()->create($payload->toArray());
    }
}
