<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\PlaceTransactionRequest;
use App\Http\Responses\V1\DefaultResponse;
use App\Processes\TransactionCreationProcess;
use Illuminate\Contracts\Support\Responsable;

class PlaceTransactionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(PlaceTransactionRequest $request, TransactionCreationProcess $process): Responsable
    {
        $data = $process->run($request->payload());
        return new DefaultResponse($data);
    }
}
