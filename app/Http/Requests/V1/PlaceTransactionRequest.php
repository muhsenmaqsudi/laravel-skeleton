<?php

namespace App\Http\Requests\V1;

use App\Http\Payloads\V1\PlaceTransactionPayload;
use App\ValueObjects\Amount;
use App\ValueObjects\Ulid;
use App\ValueObjects\WalletID;
use Illuminate\Foundation\Http\FormRequest;

class PlaceTransactionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required',
            'wallet_id' => 'required',
            'amount' => 'required',
        ];
    }

    public function payload(): PlaceTransactionPayload
    {
        return PlaceTransactionPayload::make(
            userId: new Ulid($this->input('user_id')),
            walletId: new WalletID($this->input('wallet_id')),
            amount: new Amount($this->input('amount')),
        );
    }
}
