<?php

namespace App\Action;

use App\Commands\StoreTransaction;
use App\Commands\StoreTransactionStatus;
use App\Enums\TransactionStatus;
use App\Http\Payloads\V1\Payload;
use App\Http\Payloads\V1\PlaceTransactionPayload;
use App\Models\Transaction;
use App\Tasks\Task;
use Closure;
use Illuminate\Database\Eloquent\Model;
use Lorisleiva\Actions\Concerns\AsAction;

class CreateNewTransaction
{
    use AsAction;

    public function __construct(
        private readonly StoreTransaction $storeTransactionCommand,
        private readonly StoreTransactionStatus $storeTransactionStatusCommand
    ) {}

    /**
     * @param PlaceTransactionPayload $payload
     * @return Transaction|Model
     */
    public function handle(Payload $payload): Transaction|Model
    {
        $transaction = $this->storeTransactionCommand->handle($payload);

        $payload->setTransactionId($transaction->id);

        $this->storeTransactionStatusCommand->handle(transaction: $transaction, status: TransactionStatus::CREATED, description: 'new transaction created');

        return $transaction;
    }
}
