<?php

namespace App\Http\Payloads\V1;

use App\Models\Transaction;
use App\Models\TransactionStatus;
use App\ValueObjects\Amount;
use App\ValueObjects\Ulid;
use App\ValueObjects\WalletID;

class PlaceTransactionPayload implements Payload
{
    public string $transactionId;
    public Transaction $transaction;

    public function __construct(
        public readonly Ulid $userId,
        public readonly WalletID $walletId,
        public readonly Amount $amount
    ) {
    }

    public static function make(Ulid $userId, WalletID $walletId, Amount $amount): static
    {
        return new static(userId: $userId, walletId: $walletId, amount: $amount);
    }

    public function setTransactionId(string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    public function toArray(): array
    {
        return [
            'user_id' => $this->userId,
            'wallet_id' => $this->walletId,
            'amount' => $this->amount,
        ];
    }
}
