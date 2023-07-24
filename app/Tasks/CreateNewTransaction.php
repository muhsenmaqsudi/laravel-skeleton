<?php

namespace App\Tasks;

use App\Commands\StoreTransaction;
use App\Commands\StoreTransactionStatus;
use App\Enums\TransactionStatus;
use App\Http\Payloads\V1\Payload;
use App\Http\Payloads\V1\PlaceTransactionPayload;
use App\ValueObjects\Ulid;
use Closure;

class CreateNewTransaction implements Task
{
    public function __construct(
        private readonly StoreTransaction $storeTransactionCommand,
        private readonly StoreTransactionStatus $storeTransactionStatusCommand
    ) {}

    /**
     * @param PlaceTransactionPayload $payload
     * @param Closure $next
     * @return mixed
     */
    public function __invoke(Payload $payload, Closure $next): mixed
    {
        $transaction = $this->storeTransactionCommand->handle($payload);

        $payload->setTransactionId($transaction->id);

        $this->storeTransactionStatusCommand->handle(transaction: $transaction, status: TransactionStatus::CREATED, description: 'new transaction created');

        return $next($payload);
    }
}
