<?php

namespace App\Queries;

use App\Models\Transaction;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ListTransactions
{
    public function handle(): LengthAwarePaginator
    {
        return Transaction::query()->paginate();
    }
}
